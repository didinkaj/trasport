<script>
    import {mapGetters} from 'vuex'
    export default {
        components: {

        },
        data() {
            return {
                centerDialogVisible: false
            }
        },
        computed: {
            ...mapGetters({
                vehicles: 'vehicles',
            })

        },
        methods: {
            deleteVehicle(vehicleToDelete) {
                this.$confirm('' + vehicleToDelete.name + ' ' + vehicleToDelete.no_plate + '  will be  delete permanently. Continue?', 'Warning', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning',
                    center:true
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
                this.$router.push({name: 'editvehicles_route', params: {id:vehicle} });
            },
        addVehicleToMaintenance(vehicle){
            this.$router.push({name: 'addToMaintenance_route', params: {vehicleDatas:vehicle} });
            this.$store.commit('SAVE_ROUTE_VEHICLE',vehicle);
        }
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
            this.$Progress.start(40)


        },
    }
</script>

<template>
    <div>
        <div class="grid-x page-header">
            <div class="cell medium-6">
                <h5>Vehicles Maintainance</h5>
            </div>
            <div class="cell medium-6">
                <div class="row">
                <div class="dash-title text-center column">
                    <h6>
                        <router-link style="color: #2f4b26" :to="{name:'addvehicle_route'}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Vehicles
                        </router-link>
                    </h6>
                </div>
                    <div class=" dash-title text-center column">
                    <a href="/vehicles/list/pdf" target="_blank" style="color: #2f4b26">
                        Download
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>


        <div class="table table-borderless" id="tablediv">
            <table class="stack" id="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th class="text-center">CAPACITY</th>
                    <th class="text-center">NUMBER PLATE</th>
                    <th colspan="2" class="text-center">ACTIONS</th>
                </tr>
                </thead>
                <tr v-for="(vehicle, index) in vehicles" class="data">
                    <td>{{ index+1 }}</td>
                    <td class="">{{ vehicle.name | uppercase}}</td>
                    <td class="text-center">{{ vehicle.capacity }}</td>
                    <td class="text-center">{{ vehicle.no_plate | uppercase}}</td>

                    <td class="text-center" @click.prevent="addVehicleToMaintenance(vehicle)">
                        <a href="#">Add Maintainance</a>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</template>

<style>
    .danger {
        color: red;
        cursor: pointer;
    }

    table td {
        padding: 5px;
        v-align: center;
    }

    table tr:hover {
        background-color: #e6e6e6;
    }
</style>