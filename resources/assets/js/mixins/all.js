const mymixins = {
    created(){
        console.log("Welcome aboard")
    },
    methods:{
        success(messageToEcho)
        {
            this.$notify({
                title: 'Success',
                message: messageToEcho,
                type: 'success'
            });
        }
    }
}

export default mymixins