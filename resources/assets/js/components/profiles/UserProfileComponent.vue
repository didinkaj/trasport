<script>
    import {mapGetters} from 'vuex'

    export default {
        data() {
            return {
                myProfileInfo: {},
            }
        },
        computed: {
            ...mapGetters({
                driverInfo: 'driverInfo'
            })

        },
        methods: {
            getInfo() {
                this.myProfileInfo = this.profileInfo;
            }

        },
        created() {
            this.getInfo();
            this.$store.dispatch('getLoggedInDriver');

        },
        mounted() {

        }
    }
</script>

<template>
    <div class="card dashboard-item cell">
        <div class="card-section">
            <div class="card-section text-center">
            <h4>{{ driverInfo.name }}</h4>
            </div>
            <div class="card-section text-center">
            <a href="#" >
                <i class="fa fa-user fa-5x icon-user"></i>
            </a>
            </div>
            <div class="card-section">
                <h6>Phone Number : {{ driverInfo.phone }}</h6>
            </div>
            <div class="card-section">
                <h6>Email Address : {{ driverInfo.email }}</h6>
            </div>
            <div class="card-section">
                <h6>Date Created : {{ driverInfo.created_at }}</h6>
            </div>
            <div class="card-section">
                <h6>Phone Number : {{ driverInfo.updated_at }}</h6>
            </div>
        </div>
    </div>


</template>

<style>

</style>