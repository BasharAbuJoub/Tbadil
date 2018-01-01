<template>
    <section>
        <form action="">
            <div class="columns is-centered">
                <div class="field column is-half">
                    <div class="control">
                        <input type="text" class="input" placeholder="اسم الكتاب"  name="name_ar" v-model="search" required>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-bordered is-fullwidth" dir="rtl">
            <thead>
            <tr>
                <th>اسم الكتاب</th>
                <th>السعر</th>
                <th>الإجراء</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in filtered">
                <td><a :href="'/books/'+book.id">{{book.name_ar}}</a></td>
                <td>{{book.price}}د</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
    </section>
</template>
<script>
    export default {
        data(){
            return {
                search: "",
                books: []
            }
        },
        mounted() {
            var self = this;
            axios.post('/api/uniBooks')
                .then(function (response) {
                    self.books = response.data;
                    console.log(self.books);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        computed: {
            filtered: function () {
                return this.books.filter((book)=>{
                    return book.name_ar.toLowerCase().match(this.search.toLowerCase())
                        || book.name_en.toLowerCase().match(this.search.toLowerCase());
                });
            }
        }
    }
</script>

