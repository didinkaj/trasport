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
                    vehicles_id: ''
                }

            }
        },
        methods: {
            getDrivers() {
                this.driversInfo = this.drivers
            },
            getVehicleInfo() {

                this.vehicleToEdit = this.routeParamsVehicle
            },
            assignDriver() {
                if (this.formdata.users_id == '' || this.vehicleDatas.id == '') {
                    if(this.vehicleDatas.id == ''){
                        this.error('please select the driver to assign')
                    }
                    this.error('an error occured driver not assigned')


                } else {
                    let assignment = {
                        'users_id': this.formdata.users_id,
                        'vehicles_id': this.vehicleDatas.id
                    }
                    this.$store.dispatch('addDriverAssignment',assignment).then((response) => {
                        this.success('Driver assigned successfully')
                    }).catch((error)=>{
                        this.error('Driver assignement failed')
                    })
                    console.log(assignment)

                }


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
                <h5>Assigning Driver to vehicle</h5>
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
                <h5 class="text-center">Add Driver</h5>
                <form>
                    <div class=" ">
                        <label>Select Driver
                            <select v-model="formdata.users_id">
                                <option v-for="driver in drivers" :value="driver.id">{{driver.name}}</option>
                            </select>
                        </label>
                    </div>
                    <button type="submit" class="button auth-button right" @click.prevent="assignDriver">
                        Add Driver
                    </button>
                </form>


                <table class="stack" id="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>Phone Number</th>
                        <th colspan="2" class="text-center">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> delete</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</template>

<style>

</style>