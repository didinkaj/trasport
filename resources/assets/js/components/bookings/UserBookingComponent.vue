<script>
    import {mapGetters} from 'vuex'

    export default {
        data() {
            return {
                dialogTableVisible: false,
                dialogFormVisible: false,
                allevents:'',
                form: {
                    dates: '',
                    event: '',
                    description:''
                },
                formLabelWidth: '120px',
                formLabelWidth: '120px'
            }
        },
        computed: {
            ...mapGetters({
                bookings: 'bookings',
                events:'events'
            })
        },
        methods:{
            getAllevents(){
                this.allevents = this.events
            }
        },
        created() {
            this.$store.dispatch('getAllBookings');
            this.$store.dispatch('getAllEvents');
            this.getAllevents();
            this.$Progress.start(40)
        },
        mounted(){

        }
    }
</script>

<template>
    <div>
        <div class="grid-x page-header">
            <div class="cell medium-6">
                <h5>Book Vehicle</h5>
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
                    <h6> {{booking.capacity}} Seater #{{ booking.no_plate }}  </h6>
                </div>
            </div>
            <div class="cell medium-9 card">
                <div class="grid-x">
                    <div class="cell medium-6"><br/>
                        <div class="text-center">
                            <h6>Driver Details</h6>
                        </div>
                    </div>
                    <div class="cell medium-6"><br/>

                        <div class="text-center">
                            <h6> Booking Request</h6>
                        </div>
                        <br/>
                        <br/>
                        <br/>


                        <button class="button success-green float-right" style="margin-bottom: 0px"
                                @click="dialogFormVisible = true">Book Van
                        </button>

                    </div>
                </div>
            </div>
        </div>


        <el-dialog title="Booking Confirmation " :visible.sync="dialogFormVisible">
            <el-form :model="form">
                <el-form-item label="Select Date" :label-width="formLabelWidth">
                    <el-date-picker
                            v-model="form.dates"
                            type="daterange"
                            range-separator="To"
                            start-placeholder="Start date"
                            end-placeholder="End date">
                    </el-date-picker>
                </el-form-item>
                <el-form-item label="Description" :label-width="formLabelWidth">
                    <el-input
                            type="textarea"
                            :rows="4"
                            placeholder="Please Say something about the event"
                            v-model="form.description">
                    </el-input>
                </el-form-item>
                <el-form-item label="Event" :label-width="formLabelWidth">
                    <el-select v-model="form.event" placeholder="Please select an Event">
                        <el-option v-for="event in allevents" :label="event.name" :value="event.id" :key="event.id"></el-option>
                    </el-select>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="dialogFormVisible = false">Confirm</el-button>
              </span>
        </el-dialog>


    </div>
</template>

<style>
    .text-center {

    }

    .success-green {
        background-color: green;
        margin-right: 10px;
        margin-bottom: 0px;
    }

    .success-red {
        background-color: red;
        margin-right: 10px;
        margin-bottom: 0px;
    }

</style>