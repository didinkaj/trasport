<script>
    export default {
        data() {
            return {}
        }
    }
</script>

<template>
    <div>
        <ul class="menu">
            <li class="active"> &nbsp;&nbsp;<router-link :to="{name:'ShowuserDashboard_route'}"><i
                    class="fa fa-dashboard fa-2x"></i>&nbsp;&nbsp; Dashboard
            </router-link>
            </li>

            <li class="">&nbsp;&nbsp;<router-link :to="{name:'Userbooking_route'}"><i class="fa fa-cab fa-2x"></i> &nbsp;&nbsp;Book Vehicle
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'UserEvents_route'}"><i
                    class="fa fa-calendar-check-o fa-2x"></i> &nbsp;&nbsp;My Events
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'Seatbooking_route'}"><i class="fa fa-check fa-2x"></i>&nbsp;&nbsp;
                Book Seat
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'UserReports_route'}"><i class="fa fa-area-chart fa-2x"></i>&nbsp;&nbsp;
                Reports
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'ShowuserProfile_route'}"><i class="fa fa-user-circle  fa-2x"></i>
                &nbsp;&nbsp;Account
            </router-link>
            </li>
        </ul>
    </div>
</template>

<style>

</style>