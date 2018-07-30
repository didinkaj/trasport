<script>
    import {mapGetters} from 'vuex'

    export default {
        props: [
            'vehicleDatas'
        ],
        data() {
            return {
                driversInfo: {},
                vehicleToEdit: {},
                formdata: {
                    users_id: '',
                    vehicles_id: '',
                },
                dates:'',
                formLabelWidth:''


            }
        },
        methods: {
            getDrivers() {
                this.driversInfo = this.drivers
            },
            getVehicleInfo() {

                this.vehicleToEdit = this.routeParamsVehicle
            },
            addToMaitenance() {
                console.log('maintenance scheduled')

            },
            success(messageToEcho) {
                this.$notify({
                    title: 'Success',
                    message: messageToEcho,
                    type: 'success'
                });
            },
            error(messageToEcho) {
                this.$notify({
                    title: 'Error',
                    message: messageToEcho,
                    type: 'error'
                });
            },

        },
        computed: {
            ...mapGetters({
                drivers: 'drivers',
                routeParamsVehicle: 'routeParamsVehicle',
                driversAssignedToVehicle:'driversAssignedToVehicle'
            })

        },
        filters: {
            dateFormat: (dateValue) => {
                let dateObject = new Date(Date.parse(dateValue))
                let dateReadable = dateObject.toDateString();
                return dateReadable
            }
        },
        created() {
            this.getDrivers();
            this.getVehicleInfo();
            console.log(this.driversInfo)
            if (this.driversInfo == null) {
                this.$router.push({name: 'addDriverToVehicles_route'})
            }
            this.$store.dispatch('getDriverAssignments',this.vehicleDatas.id).then((response)=>{
                console.response
            }).catch((error)=>{
                console.log(error.message)
            })
        },
        mounted() {
            console.log(this.vehicleDatas)
            console.log(this.driversAssignedToVehicle)

        }
    }
</script>

<template>
    <div class="container">
        <div class="grid-x page-header">
            <div class="cell medium-6">
                <h5>Schedulie Maintenance</h5>
            </div>
            <div class="cell medium-6">
                <div class="row">
                    <div class="dash-title text-center column">
                        <h6>

                        </h6>
                    </div>
                    <div class=" dash-title text-center column">

                    </div>
                </div>
            </div>
        </div>


        <div class="grid-x ">
            <div class="cell medium-4">
                <div class="card dashboard-item cell">
                    <div class="card-section">
                        <div class="card-section text-center">
                            <h5>{{ vehicleDatas.name }}</h5>
                        </div>
                        <div class="card-section text-center">
                            <a href="#">
                                <i class="fa fa-cab fa-5x icon-user"></i>
                            </a>
                        </div>
                        <div class="card-section">
                            <h6>Number Plate : {{ vehicleToEdit.no_plate }}</h6>
                        </div>
                        <div class="card-section">
                            <h6>Capacity : {{ vehicleToEdit.capacity }}</h6>
                        </div>
                        <div class="card-section">
                            <h6> Created : {{ vehicleToEdit.created_at | dateFormat}}</h6>
                        </div>
                        <div class="card-section">
                            <h6> Update : {{ vehicleToEdit.updated_at | dateFormat}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell medium-7 medium-offset-1">
                <h5 class="text-center">Add Maintenance Dates</h5>
                <form>
                    <div class=" ">
                        <el-form-item label="Select Maintenance Date" :label-width="formLabelWidth">
                            <el-date-picker
                                    v-model="dates"
                                    type="daterange"
                                    range-separator="To"
                                    start-placeholder="Start date"
                                    end-placeholder="End date">
                            </el-date-picker>
                        </el-form-item>
                    </div>
                    <button type="submit" class="button auth-button right" @click.prevent="addToMaitenance">
                        Add Maintenance
                    </button>
                </form>


                <table class="stack" id="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th colspan="2" class="text-center">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</template>

<style>

</style>