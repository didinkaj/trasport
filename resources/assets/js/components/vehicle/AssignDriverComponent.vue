<script>
    import {mapGetters} from 'vuex'

    export default {
        data(){
            return{
                driversInfo:{},
                vehicleDatas:{},
                vehicleToEdit:{}

            }
        },
        methods:{
            getDrivers(){
                this.driversInfo = this.drivers
            }

        },
        computed:{
            ...mapGetters({
                drivers:'drivers'
            })

        },
        created(){
            this.getDrivers();
            console.log(this.driversInfo)
        },
        mounted(){

        }
    }
</script>

<template>
    <div class="container">
        <div class="grid-x ">
            <div class="cell medium-4">
    <div class="card dashboard-item cell">
        <div class="card-section">
            <div class="card-section text-center">
                <h4>{{ vehicleDatas.name }}</h4>
            </div>
            <div class="card-section text-center">
                <a href="#" >
                    <i class="fa fa-cab fa-5x icon-user"></i>
                </a>
            </div>
            <div class="card-section">
                <h6>Number Plate : {{ vehicleDatas.no_plate }}</h6>
            </div>
            <div class="card-section">
                <h6>Capacity : {{ vehicleDatas.capacity }}</h6>
            </div>
            <div class="card-section">
                <h6>Date Created : {{ vehicleDatas.created_at }}</h6>
            </div>
            <div class="card-section">
                <h6>Date Update : {{ vehicleDatas.updated_at }}</h6>
            </div>
        </div>
    </div>
            </div>
            <div class="cell medium-7 medium-offset-1">
                <h4>Add Driver</h4>
                <form>
                    <div class=" ">
                        <label>Select Driver
                            <select>
                                <option value="husker">Husker</option>
                                <option value="starbuck">Starbuck</option>
                                <option value="hotdog">Hot Dog</option>
                                <option value="apollo">Apollo</option>
                            </select>
                        </label>
                    </div>
                    <button type="submit" class="button auth-button right" @click.prevent="">
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
                    <td>
                    </td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</template>

<style>

</style>