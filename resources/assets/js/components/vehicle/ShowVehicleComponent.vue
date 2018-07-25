<script>
    import {mapGetters} from 'vuex'
    export default {
        data(){
            return{
                vehiclesInfo:[]
            }
        },
        methods:{
            getVehiclesInfo(){
                this.vehiclesInfo = this.vehicles
            }

        },
        computed:{
            ...mapGetters({
                vehicles: 'vehicles',
            })
        },
        created(){
            this.$store.dispatch('getAllVehicles');
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
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tr v-for="vehicle in vehicles" >
                        <td>{{ vehicle.id }}</td>
                        <td>{{ vehicle.name }}</td>
                        <td>{{ vehicle.capacity }}</td>
                        <td>{{ vehicle.no_plate }}</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<style>

</style>