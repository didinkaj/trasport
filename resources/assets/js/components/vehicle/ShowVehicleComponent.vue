<script>
    export default {
        data(){
            return{
                items:[]
            }
        },
        methods:{
            getVueItems: function getVueItems() {
                var _this = this;
                axios.get('/api/allusers').then(function (response) {
                    _this.items = response.data;
                });
            }
        },
        mounted(){
            this.getVueItems();
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
                    <tr v-for="item in items">
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.capacity }}</td>
                        <td>{{ item.no_plate }}</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<style>

</style>