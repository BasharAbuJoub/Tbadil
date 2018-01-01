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
                <th>اسم الكتاب EN</th>
                <th>الجامعة</th>
                <th>السعر</th>
                <th>الطبعة</th>
                <th>الإجراء</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in filtered">
                <td><a :href="'/books/'+book.id">{{book.name_ar}}</a></td>
                <td><a :href="'/books/'+book.id">{{book.name_en}}</a></td>
                <td>{{universities[book.university_id - 1].name_ar}}</td>
                <td>{{book.price}}د</td>
                <td>{{book.year}}</td>
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
                books: [],
                universities: []
            }
        },
        mounted() {
            var self = this;
            axios.post('/api/books')
                .then(function (response) {
                    self.books = response.data;
                    console.log(self.books);
                })
                .catch(function (error) {
                    console.log(error);
            });
            axios.get('/api/universities')
                .then(function (response) {
                    self.universities = response.data;
                }).catch(function (error) {
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
