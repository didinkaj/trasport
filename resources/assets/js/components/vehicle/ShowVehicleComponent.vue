<script>
    import {mapGetters} from 'vuex'

    export default {
        components: {

        },
        data() {
            return {
                vehiclesInfo: []
            }
        },
        methods: {
            getVehiclesInfo() {
                this.vehiclesInfo = this.vehicles
            },
            deleteVehicle(vehicleToDelete) {
                this.$confirm('' + vehicleToDelete.name + ' ' + vehicleToDelete.no_plate + '  will be  delete permanently. Continue?', 'Warning', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning'
                }).then(() => {
                    this.$store.dispatch('deleteVehicle', vehicleToDelete);
                    this.$Progress.start(40);
                    this.$router.push({name: 'Showvehicles_route'})
                    this.$message({
                        type: 'success',
                        message: 'Delete completed'
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Action cancelled'
                    });
                });
            },
            editVehicle(vehicle) {
                this.$router.push({name: 'editvehicles_route', params: {id: vehicle}});
            }
        },
        computed: {
            ...mapGetters({
                vehicles: 'vehicles',
            })
        },
        filters: {
            uppercase: (value) => {
                return value.toUpperCase()
            },
            ucfirst: (string) => {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        },
        mounted() {

        }, created() {
            this.$store.dispatch('getAllVehicles')
            this.getVehiclesInfo();
            this.$Progress.start(40)

        },
    }
</script>

<template>
    <div>
        <div class="dash-title text-center">
            <h6>
                <router-link :to="{name:'addvehicle_route'}">
                    Add Vehicles
                </router-link>
            </h6>


            <div class="table table-borderless" id="tablediv">
                <table class="stack" id="table">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name</th>
                        <th class="text-center">Capacity</th>
                        <th>Number Plate</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    </thead>
                    <tr v-for="(vehicle, index) in vehicles">
                        <td>{{ index }}</td>
                        <td class="align-left">{{ vehicle.name | ucfirst}}</td>
                        <td class="text-center">{{ vehicle.capacity }}</td>
                        <td class="align-left">{{ vehicle.no_plate | uppercase}}</td>
                        <td class="btn btn-info edit-button" @click="editVehicle(vehicle)">
                            <span class=""> <i class="fa fa-pencil-square-o "></i></span>
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
    .danger {
        color: red;
        cursor: pointer;
    }
</style>