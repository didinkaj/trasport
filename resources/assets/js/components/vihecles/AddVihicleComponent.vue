<script>
    export default {

        data() {

            return {

                items: [],
                hasError: true,
                newItem: {
                    'name': '',
                    'capacity': '',
                    'noPlate': ''
                },
            }
        },
        methods: {
            createItem() {
                let _this = this;
                let input = this.newItem;

                if (input['name'] == '' || input['noPlate'] == '' || input['capacity'] == '') {

                    this.hasError = false;

                } else {

                    this.hasError = true;

                    axios.post('/vueitems', input).then(function (response) {

                        _this.newItem = {'name': ''};
                        _this.getVueItems();
                    });
                }
            }
        }
    }

</script>

<template>
    <div>
        <div class="dash-title text-center">
            <h5>Add Vehicle</h5>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"
                   required v-model="newItem.name" >
        </div>
        <div class="form-group">
            <label for="capacity">Capacity:</label>
            <input type="number" class="form-control" id="capacity" name="capacity"
                   required v-model="newItem.capacity" >
        </div>
        <div class="form-group">
            <label for="noPlate">Number Plate:</label>
            <input type="text" class="form-control" id="noPlate" name="noPlate"
                   required v-model="newItem.noPlate" >
        </div>

        <button class=" button " @click.prevent="createItem()">
            <span class="fa fa-plus"></span> Add Vehicle
        </button>
    </div>

</template>

<style>

</style>