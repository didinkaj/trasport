<script>
    import {mapGetters} from 'vuex'

    export default {
        data() {
            return {

            }
        },
        computed: {
            ...mapGetters({
                vehiclesNo: 'vehiclesNo',
                driversNo: 'driversNo',
                bookingsNo: 'bookingsNo'
            })
        },
        methods: {

        },
        created() {
            this.$store.dispatch('getAllVehicles'),
                this.$store.dispatch('getAllDrivers')
                this.$store.dispatch('getAllBookings')
            this.$Progress.start()
        },
        mounted() {
            this.$Progress.decrease(40)
            this.$Progress.finish()
        }
    }


</script>

<template>
    <div>
        <div class="grid-x page-header">
            <div class="cell medium-12">
                <div class="dash-title text-center">
                    <h5>Quick Over View</h5>
                </div>
            </div>
        </div>
        <div class="grid-x dashboard-content">
            <div class=" cell medium-3 card dashboard-item ">
                <div class="card-divider">
                    Vehicles
                </div>
                <router-link :to="{name:'Showvehicles_route'}">
                    <i class="fa fa-cab fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6> {{ vehiclesNo }} Registered Vehicles</h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Drivers
                </div>
                <router-link :to="{name:'Showdrivers_route'}">
                    <i class="fa fa-users fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>{{ driversNo }} Drivers</h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Events
                </div>
                <router-link :to="{name:'Showvehicles_route'}">
                    <i class="fa fa-calendar fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>On Going Events {{bookingsNo}}</h6>
                </div>
            </div>
        </div>

        <div class="grid-x dashboard-content">
            <div class=" cell medium-3 card dashboard-item ">
                <div class="card-divider">
                    Bookings
                </div>
                <router-link :to="{name:'Showbooking_route'}">
                    <i class="fa fa-calendar-check-o fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>{{bookingsNo}} Pending Requests </h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Reports
                </div>
                <router-link :to="{name:'Showvehicles_route'}">
                    <i class="fa fa-area-chart fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>Reports</h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Maintainance
                </div>
                <router-link :to="{name:'Showvehicles_route'}">
                    <i class="fa fa-cogs fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>Next Maintainance 5th</h6>
                </div>
            </div>
        </div>

    </div>
</template>

<style>

</style>