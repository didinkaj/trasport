<script>
    export default {
        props:[
            'vehicle'
        ],
        data(){
            return{

            }
        },
        methods:{
            updateVehicle(vehicle){
                console.log("hellow ");
                console.log(vehicle);

            }
        }

    }
</script>
<template>
    <td  class="btn btn-info edit-button"  @click="updateVehicle(vehicle)" >
        <span class=""> <i class="fa fa-pencil-square-o "></i></span>
    </td>
</template>

<style>

</style>
