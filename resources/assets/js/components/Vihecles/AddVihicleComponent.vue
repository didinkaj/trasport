<script>
    export default {

        data() {

            return {

                items: [],
                hasError: true,
                newItem: {
                    'name': '',
                    'age': '',
                    'profession': ''
                },
            }
        },
        methods() {
            createItem: function createItem() {
                let _this = this;
                let input = this.newItem;

                if (input['name'] == '' || input['age'] == '' || input['profession'] == '') {

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
        <p class="text-center alert alert-danger"
           v-bind:class="{ hidden: hasError }">Please fill all fields!
        </p>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"
                   required v-model="newItem.name" placeholder=" Enter some name">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age"
                   required v-model="newItem.age" placeholder=" Enter your age">
        </div>
        <div class="form-group">
            <label for="profession">Profession:</label>
            <input type="text" class="form-control" id="profession" name="profession"
                   required v-model="newItem.profession" placeholder=" Enter your profession">
        </div>

        <button class="btn btn-primary" @click.prevent="createItem()">
            <span class="glyphicon glyphicon-plus"></span> ADD
        </button>
    </div>

</template>

<style>

</style>