<script>
    import {mapGetters} from 'vuex'
    export default {
        data() {
            return {
                vehicle: {},
                errors: [],
                hasError: true,
                newVehicle: {},
            }
        },
        computed:{
            ...mapGetters({
                vehiclesToEdit:'vehiclesToEdit'
            })
        },
        methods: {
            editVehicle() {
                let input = this.vehicle;
                if (input['name'] == '' || input['no_plate'] == '' || input['capacity'] == '') {
                    this.errors = [];

                    if (!this.vehicle.name) {
                        this.errors.push('name required.');
                    }
                    if (!this.vehicle.capacity) {
                        this.errors.push('capacity required.');

                    }
                    if (!this.vehicle.no_plate) {
                        this.errors.push('number plate required.');
                    }
                    this.error('Vehicle not added. Ensure all fields are filled')
                } else {
                    this.$store.dispatch('updateVehicle', input).then(() => {
                            this.success('Vehicle added successfully')
                            this.vehicle = {}
                            this.errors = []
                            this.$router.replace({name: 'Showvehicles_route'})
                        },
                        error => {
                            this.error('Vehicle not added')

                        })
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
            vehicleStoreValues (){
                let vehicle = this.$route.params.id
                this.vehicle = vehicle
            }

        },

        filters:{
            capitalize:  (value) => {
                if (!value) return ''
                value = value.toString()
                return value.charAt(0).toUpperCase() + value.slice(1)
            }
        },
        created(){
            /*let vehicle = this.$route.params.vehicle
            this.$store.dispatch('getVehicle',vehicle)
            this.vehiclesToEdit = vehicle*/
            this.vehicleStoreValues();
            this.$Progress.start(40)
        }
    }

</script>

<template>
    <div>
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><router-link :to="{name:'dashboard_route'}">Home</router-link></li>
                <li><router-link :to="{name:'Showvehicles_route'}">Vehicles</router-link></li>
                <li>
                    <span class="show-for-sr">Current: </span> Edit Vehicle
                </li>
            </ul>
        </nav>
        <form class="form-container">

            <div class="reveal" id="exampleModal1" data-reveal>
                <h1>Awesome. I Have It.</h1>
                <p class="lead">Your couch. It is mine.</p>
                <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="form-group">
                <div v-if="errors.length" class="error text-center">
                    <b>Please correct the following error(s):</b>
                    <div>
                        <div v-for="error in errors">{{ error }}</div>
                    </div>
                </div>
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="20"
                       required="required" v-model="vehicle.name">
            </div>
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" name="capacity" min="1" max="100"
                       required="required" v-model="vehicle.capacity ">
            </div>
            <div class="form-group">
                <label for="no_plate">Number Plate:</label>
                <input type="text" class="form-control" id="no_plate" name="no_plate"
                       required="required" v-model="vehicle.no_plate">
            </div>

            <button class=" button auth-button text-center" @click.prevent="editVehicle()">
                <span class="fa fa-pencil-square-o"></span> Save Changes
            </button>
        </form>
    </div>

</template>

<style>
    .error {
        color: red;
    }
</style>