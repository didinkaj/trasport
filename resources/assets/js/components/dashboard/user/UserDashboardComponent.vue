<script>
    import {mapGetters} from 'vuex'

    export default {
        data() {
            return {}
        },
        computed: {
            ...mapGetters({
                vehiclesNo: 'vehiclesNo',
                driversNo: 'driversNo',
                bookingsNo: 'bookingsNo',
                eventsNo: 'eventsNo'
            })
        },
        methods: {},
        created() {
            this.$store.dispatch('getAllVehicles'),
                this.$store.dispatch('getAllDrivers')
            this.$store.dispatch('getAllBookings')
            this.$store.dispatch('countAllEvents')
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
            <div class=" medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Book Seat
                </div>
                <router-link :to="{name:'Seatbooking_route'}">
                    <i class="fa fa-plane fa-4x icon-user" aria-hidden="true"></i>
                </router-link>
                <div class="card-section">
                    <h6>{{ driversNo }} Seats available</h6>
                </div>
            </div>
            <div class=" medium-offset-1 cell medium-3 card dashboard-item ">
                <div class="card-divider">
                    Make Reservations
                </div>
                <router-link :to="{name:'Userbooking_route'}">
                    <i class="fa fa-cab fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6> {{ vehiclesNo }}  Vehicles available</h6>
                </div>
            </div>

            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Events
                </div>
                <router-link :to="{name:'UserEvents_route'}">
                    <i class="fa fa-calendar fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>On Going Events {{eventsNo}}</h6>
                </div>
            </div>


        </div>

        <div class="grid-x dashboard-content">

            <div class="medium-offset-4 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Reports
                </div>
                <router-link :to="{name:'UserReports_route'}">
                    <i class="fa fa-area-chart fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>Reports</h6>
                </div>
            </div>

        </div>

    </div>
</template>

<style>

</style>