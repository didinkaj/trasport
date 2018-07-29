<script>
    import {mapGetters} from 'vuex'

    export default {
        components: {

        },
        data() {
            return {
                eventsInfo: [],
            }
        },
        methods: {
            getEventInfo() {
                this.eventsInfo = this.events
            },
            deleteEvent(eventToDelete) {
                this.$confirm('' + eventToDelete.name + ' ' + eventToDelete.no_plate + '  will be  delete permanently. Continue?', 'Warning', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning',
                    center:true
                }).then(() => {
                    this.$store.dispatch('deleteEvent' ,eventToDelete);
                    this.$Progress.start(40);
                    this.$router.push({name: 'ShowEvents_route'})
                    this.$message({
                        type: 'success',
                        message: 'Delete completed'
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Action cancelled'
                    });
                });
            },
            editEvent(event) {
                this.$router.push({name: 'editEvent_route', params: {id: event}});
            }
        },
        computed: {
            ...mapGetters({
                events: 'events',
            })
        },
        filters: {
            uppercase: (value) => {
               return value.toUpperCase();
            },
            ucfirst: (string) => {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        },
        mounted() {

        }, created() {
            this.$store.dispatch('getAllEvents')
            this.getEventInfo();
            this.$Progress.start(40)
            console.log(this.drivers);

        },
    }
</script>

<template>
    <div>
        <div class="grid-x page-header">
            <div class="cell medium-6">
                <h5>Book Seat</h5>
            </div>
            <div class="cell medium-6">
                <div class="row">
                <div class="dash-title text-center column">
                    <h6>

                    </h6>
                </div>
                    <div class=" dash-title text-center column">
                    <a href="/events/list/pdf" target="_blank" style="color: #2f4b26">
                        Download
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>


        <div class="table table-borderless" id="tablediv">
            <table class="stack" id="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Event Name</th>
                    <th>Van Booked</th>
                    <th>Seats Available</th>
                    <th class="text-center">ACTIONS</th>
                </tr>
                </thead>
                <tr v-for="(event, index) in events" class="data">
                    <td>{{ index+1 }}</td>
                    <td class="">{{ event.name  }}</td>
                    <td >{{ event.description  }}</td>
                    <td></td>
                    <td class="text-center"><a href="#"> <i class="fa fa-cab"></i> Book Seat</a></td>
                </tr>
            </table>
        </div>

    </div>
</template>

<style>
    .danger {
        color: red;
        cursor: pointer;
    }

    table td {
        padding: 10px;
        v-align: center;
    }

    table tr:hover {
        background-color: #e6e6e6;
    }
</style>