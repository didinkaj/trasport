<script>
    import {mapGetters} from 'vuex'
    export default {
        data(){
            return{

            }
        },
        computed:{
            ...mapGetters({
                vehicles: 'vehicles',
            })
        },
        methods:{

        },
        mounted(){
            this.getVehicles();
        },
        created(){
            this.$store.dispatch('getAllVehicles');
        },
        mounted(){
            console.log("mounted")
        }
    }


</script>

<template>
<div>

    <div class="dash-title text-center">
        <h5>Quick Over View</h5>
    </div>
    <div class="grid-x dashboard-content" >
        <div class=" cell medium-3 card dashboard-item ">
            <div class="card-divider">
                 Vehicles
            </div>
            <i class="fa fa-cab fa-4x icon-user"></i>
            <div class="card-section">
                <h6> {{ vehicles.length }} Registered Vehicles</h6>
            </div>
        </div>
        <div class="medium-offset-1 medium-3 card dashboard-item cell">
            <div class="card-divider">
                Drivers
            </div>
            <i class="fa fa-users fa-4x icon-user"></i>
            <div class="card-section">
                <h6>10 Drivers</h6>
            </div>
        </div>
        <div class="medium-offset-1 medium-3 card dashboard-item cell">
            <div class="card-divider">
                Events
            </div>
            <i class="fa fa-calendar fa-4x icon-user"></i>
            <div class="card-section">
                <h6>On Going Events 3</h6>
            </div>
        </div>
    </div>

    <div class="grid-x dashboard-content" >
        <div class=" cell medium-3 card dashboard-item ">
            <div class="card-divider">
                Bookings
            </div>
            <i class="fa fa-calendar-check-o fa-4x icon-user"></i>
            <div class="card-section">
                <h6>3 Pending Requests </h6>
            </div>
        </div>
        <div class="medium-offset-1 medium-3 card dashboard-item cell">
            <div class="card-divider">
                Reports
            </div>
            <i class="fa fa-area-chart fa-4x icon-user"></i>
            <div class="card-section">
                <h6>Reports</h6>
            </div>
        </div>
        <div class="medium-offset-1 medium-3 card dashboard-item cell">
            <div class="card-divider">
                Maintainance
            </div>
            <i class="fa fa-cogs fa-4x icon-user"></i>
            <div class="card-section">
                <h6>Next Maintainance 5th</h6>
            </div>
        </div>
    </div>

</div>
</template>

<style>

</style>