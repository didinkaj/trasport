<script>
    export default {


        data() {

            return {

                items: [],
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
                let _this = this;
                let input = this.newItem;

                if (input['name'] == '' || input['no_plate'] == '' || input['capacity'] == '') {

                    this.hasError = false;

                } else {

                    this.hasError = true;

                    console.log(input);

                    axios.post('api/save/vihecle', input).then(function (response) {
                        console.log(response.data);
                    },error=>{
                        console.log("no error")
                    });

                    this.$router.push({ name: 'Showvehicles_route'})

                    }

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
            <label for="no_plate">Number Plate:</label>
            <input type="text" class="form-control" id="no_plate" name="no_plate"
                   required v-model="newItem.no_plate" >
        </div>

        <button class=" button auth-button" @click.prevent="createItem()">
            <span class="fa fa-plus"></span> Add Vehicle
        </button>
        </form>
    </div>

</template>

<style>

</style>