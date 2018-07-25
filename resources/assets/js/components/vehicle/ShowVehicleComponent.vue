<script>
    import {mapGetters} from 'vuex'
    export default {
        data(){
            return{
                vehiclesInfo:[]
            }
        },
        methods: {
            getVehiclesInfo(){
                this.vehiclesInfo = this.vehicles
            },
            deleteVehicle(vehicleToDelete) {
                this.$confirm('This will permanently delete the file. Continue?', 'Warning', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    this.$store.dispatch('deleteVehicle',vehicleToDelete);
                    this.$router.push({name: 'Showvehicles_route'})
                    this.$message({
                        type: 'success',
                        message: 'Delete completed'
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Delete canceled'
                    });
                });
            }
        },
        computed:{
            ...mapGetters({
                vehicles: 'vehicles',
            })
        },
        created(){
            this.$store.dispatch('getAllVehicles')
            this.getVehiclesInfo();
        },
        mounted(){

        }
    }
</script>

<template>
    <div>
        <div class="dash-title text-center">
            <h6><router-link :to="{name:'addvehicle_route'}">Add Vehicles</router-link>  </h6>
            <div class="table table-borderless" id="tablediv">
                <table class="table table-borderless" id="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Number Plate</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    </thead>
                    <tr v-for="vehicle in vehicles" >
                        <td>{{ vehicle.id }}</td>
                        <td>{{ vehicle.name }}</td>
                        <td>{{ vehicle.capacity }}</td>
                        <td>{{ vehicle.no_plate }}</td>
                        <td id="show-modal" @click="" class="btn btn-info">
                            <span class="fa fa-pencil"></span>
                        </td>
                        <td @click.prevent="deleteVehicle(vehicle)">
                            <span class="fa fa-trash danger"></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<style>
.danger{
    color: red;
    cursor:pointer;
}
</style>