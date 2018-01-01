<template>
</template>

<script>
    export default {
        props: ['msg'],
        methods: {
            warning() {
                this.$snackbar.open({
                    message: this.msg,
                    position: 'is-top',
                    queue: false,
                });
            }
        },
        mounted(){
            this.warning();
        },

    }

</script>