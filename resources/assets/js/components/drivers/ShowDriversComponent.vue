<script>
    import {mapGetters} from 'vuex'

    export default {
        components: {},
        data() {
            return {
                driversInfo: [],
                notification:[]
            }
        },
        methods: {
            getDriversInfo() {
                this.driversInfo = this.drivers
            },
            deleteDriver(driverToDelete) {
                this.$confirm('' + driverToDelete.name + ' ' + driverToDelete.no_plate + '  will be  delete permanently. Continue?', 'Warning', {
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel',
                    type: 'warning',
                    center: true
                }).then(() => {
                    this.$store.dispatch('deleteDriver', driverToDelete).then(response => {
                        this.$Progress.start(40);
                        this.$router.push({name: 'Showdrivers_route'})
                        this.notification.push(response.data.status)
                        this.$message({
                            type: 'success',
                            message: response.data.status
                        });
                    }).catch(error=>{
                        console.log("Deletion failed");
                        this.notification.push(error.data)
                    });
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: 'Action cancelled'
                    });
                });
            },
            editDriver(driver) {
                this.$router.push({name: 'editDriver_route', params: {id: driver}});
            }
        },
        computed: {
            ...mapGetters({
                drivers: 'drivers',
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
            this.$store.dispatch('getAllDrivers')
            this.getDriversInfo();
            this.$Progress.start(40)
            console.log(this.drivers);

        },
    }
</script>

<template>
    <div>
        <div class="grid-x page-header">
            <div class="cell medium-6">
                <h5>Drivers</h5>
            </div>
            <div class="cell medium-6">
                <div class="row">
                    <div class="dash-title text-center column">
                        <h6>
                            <router-link style="color: #2f4b26" :to="{name:'addDriver_route'}">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Driver
                            </router-link>
                        </h6>
                    </div>
                    <div class=" dash-title text-center column">
                        <a href="/drivers/list/pdf" target="_blank" style="color: #2f4b26">
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
                    <th>NAME</th>
                    <th class="text-center">Email</th>
                    <th>Phone Number</th>
                    <th colspan="3" class="text-center">ACTIONS</th>
                </tr>
                </thead>
                <tr v-for="(driver, index) in drivers" class="data">
                    <td>{{ index + 1 }}</td>
                    <td class="">{{ driver.name }}</td>
                    <td>{{ driver.email }}</td>
                    <td>{{ driver.phone }}</td>
                    <td class="btn btn-info edit-button" @click="editDriver(driver)">
                        <span> <i class="fa fa-pencil-square-o "></i></span>
                    </td>
                    <td @click.prevent="deleteDriver(driver)" class="text-center" style="margin-left: 10px;">
                        <span class="fa fa-trash danger"></span>
                    </td>
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