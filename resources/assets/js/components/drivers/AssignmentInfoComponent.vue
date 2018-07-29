<script>
    import {mapGetters} from 'vuex'
    export default {
        data() {
            return {
                myProfileInfo: {},
                myvehicles:{},
                vehiclesAssigned:{}
            }
        },
        computed: {
            ...mapGetters({
                driversAssignedToVehicle:'driversAssignedToVehicle',
                driverInfo: 'driverInfo'
            })

        }
        ,
        methods:{


        },
        created(){

            this.$store.dispatch('getLoggedInDriver');

            this.$store.dispatch('getDriversVehicle',this.driverInfo.id).then((response)=>{

                this.myvehicles = this.response.data;

            }).catch((error)=>{
                console.log(error.message)
            })


        }
    }
</script>

<template>
    <div class=" card dashboard-item cell">
        <div class="card-section">
            <h4>Vehicle Assignment History</h4>
            <div class="card-section text-center">
            <a href="#" class="profile">
                <i class="fa fa-area-chart fa-4x icon-user"></i>
            </a>
            </div>
            <div class="table table-borderless" id="tablediv">
            <table class="stack" id="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Vehicle</th>
                    <th class="text-center">Number Plate </th>
                    <th>Date</th>
                </tr>
                </thead>
                <tr class="data">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </table>
        </div>
        </div>
    </div>


</template>

<style>
    .profile{
        align: center;
    }

</style>