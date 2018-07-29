<script>
    import { mapGetters } from 'vuex'
    export default {
        data(){
            return{

            }
        },
        computed:{
            ...mapGetters({
                bookings:'bookings'
            })
        },
        created(){
            this.$store.dispatch('getAllBookings');
            this.$Progress.start(40)
        }
    }
</script>

<template>
    <div>
        <div class="grid-x page-header">
            <div class="cell medium-6">
                <h5>Bookings</h5>
            </div>
            <div class="cell medium-6">
                <div class="row">
                    <div class="dash-title text-center column">
                        <h6>
                            <router-link style="color: #2f4b26" :to="{name:'AddEvent_route'}">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Event
                            </router-link>
                        </h6>
                    </div>
                    <div class=" dash-title text-center column">
                        <a href="/vehicles/list/pdf" target="_blank" style="color: #2f4b26">
                            Download
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-x dashboard-content" v-for="booking in bookings">
            <div class=" cell medium-3 card dashboard-item ">
                <div class="card-divider ">
                   <p class="text-center">{{booking.name}} </p>
                </div>
                <router-link :to="{name:'Showvehicles_route'}">
                    <i class="fa fa-cab fa-4x icon-user"></i>
                </router-link>
                <div class="card-section">
                    <h6>  {{booking.capacity}} Seater #{{ booking.no_plate }}  </h6>
                </div>
            </div>
            <div class="cell medium-9 card">
                <div class="grid-x">
                    <div class="cell medium-6"><br/>
                        <div class="text-center">
                            <h6 >Driver Details</h6>
                        </div>
                    </div>
                    <div class="cell medium-6"><br/>

                        <div class="text-center">
                            <h6 >  Booking Request</h6>
                        </div>
                        <br/>
                        <br/>
                        <br/>


                        <button class="button success-green float-right" style="margin-bottom: 0px">Approve</button>
                        <button class="button success-red float-right" style="margin-bottom: 0px">Reject</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    .text-center{

    }
    .success-green{
        background-color:green;
        margin-right: 10px;
        margin-bottom: 0px;
    }
    .success-red{
        background-color:red;
        margin-right: 10px;
        margin-bottom: 0px;
    }

</style>