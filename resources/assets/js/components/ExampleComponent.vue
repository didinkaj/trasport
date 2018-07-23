<template>
    <div class="grid-container">
        <p>Vue component</p>
    </div>
</template>

<script>
    import ElRow from "element-ui/packages/row/src/row";
    import ElCol from "element-ui/packages/col/src/col";

    export default {
        name:'home',
        components: {
            ElCol,
            ElRow
        },
        data(){
            return{
                value1: '',
                formInline: {
                    user: '',
                    region: ''
                }

            }
        },
        methods: {
            onSubmit() {
                console.log('submit!');
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
