<template>
    <div class="field">
        <label class="label">الجامعة</label>
        <div class="control">

            <div class="select is-fullwidth" style="direction: rtl;">
                <select id="uni" name="university" required>
                    <option v-for="uni in unis" :value="uni.id">{{uni.name_ar}}</option>
                </select>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                unis: []
            }
        },
        mounted() {
            var slef = this;
            axios.get('/api/universities')
                .then(function (response) {
                    slef.unis = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
</script>
