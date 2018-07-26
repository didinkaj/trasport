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
            <li class="active"> &nbsp;&nbsp;<router-link :to="{name:'dashboard_route'}"><i
                    class="fa fa-dashboard fa-2x"></i>&nbsp;&nbsp; Dashboard
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'bookings_route'}"><i
                    class="fa fa-calendar-check-o fa-2x"></i> &nbsp;&nbsp;Bookings
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'Showvehicles_route'}"><i class="fa fa-cab fa-2x"></i> &nbsp;&nbsp;Vehicles
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'driver_route'}"><i class="fa fa-users fa-2x"></i>&nbsp;&nbsp;
                Drivers
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'reports_route'}"><i class="fa fa-area-chart fa-2x"></i>&nbsp;&nbsp;
                Reports
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'Showvehicles_route'}"><i class="fa fa-sign-out  fa-2x"></i>
                &nbsp;&nbsp;Log Out
            </router-link>
            </li>
        </ul>
    </div>
</template>

<style>

</style>