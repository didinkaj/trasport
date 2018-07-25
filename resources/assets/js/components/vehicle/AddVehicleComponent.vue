<script>
    export default {
        data() {
            return {
                items: [],
                errors: [],
                hasError: true,
                newItem: {
                    'name': '',
                    'capacity': '',
                    'no_plate': ''
                },
            }
        },
        methods: {
            createItem() {
                let input = this.newItem;
                if (input['name'] == '' || input['no_plate'] == '' || input['capacity'] == '') {
                    this.errors = [];

                    if (!this.newItem.name) {
                        this.errors.push('name required.');
                    }
                    if (!this.newItem.capacity) {
                        this.errors.push('capacity required.');

                    }
                    if (!this.newItem.no_plate) {
                        this.errors.push('number plate required.');
                    }
                    this.error('Vehicle not added. Ensure all fields are filled')
                } else {
                    if (this.$store.dispatch('addVehicle', input)) {
                        this.success('Vehicle added successfully')
                        this.newItem = {}
                        this.errors = []
                        this.$router.push({name: 'Showvehicles_route'})
                    }
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
                    title: 'Success',
                    message: messageToEcho,
                    type: 'error'
                });
            }

        }
    }

</script>

<template>
    <div>
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><a href="dashboard">Home</a></li>
                <li><a href="ShowVehicles">Vehicle</a></li>
                <li>
                    <span class="show-for-sr">Current: </span> Add vihicle
                </li>
            </ul>
        </nav>
        <form class="form-container">

            <div class="form-group">
                <div v-if="errors.length" class="error text-center">
                    <b>Please correct the following error(s):</b>
                    <div>
                        <div v-for="error in errors">{{ error }}</div>
                    </div>
                </div>
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="20"
                       required="required" v-model="newItem.name">
            </div>
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" name="capacity"
                       required="required" v-model="newItem.capacity">
            </div>
            <div class="form-group">
                <label for="no_plate">Number Plate:</label>
                <input type="text" class="form-control" id="no_plate" name="no_plate"
                       required="required" v-model="newItem.no_plate">
            </div>

            <button class=" button auth-button text-center" @click.prevent="createItem()">
                <span class="fa fa-plus"></span> Add Vehicle
            </button>
        </form>
    </div>

</template>

<style>
.error{
    color:red;
}
</style>