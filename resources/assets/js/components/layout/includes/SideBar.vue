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
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'ShowEvents_route'}"><i class="fa fa-calendar  fa-2x"></i>
                &nbsp;&nbsp;Events
            </router-link>
            </li>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'bookings_route'}"><i
                    class="fa fa-calendar-check-o fa-2x"></i> &nbsp;&nbsp;Bookings
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'Showvehicles_route'}"><i class="fa fa-cab fa-2x"></i> &nbsp;&nbsp;Vehicles
            </router-link>
            </li>
            <li class="">&nbsp;&nbsp;<router-link :to="{name:'Showdrivers_route'}"><i class="fa fa-users fa-2x"></i>&nbsp;&nbsp;
                Drivers
            </router-link>
            </li>

            <li class="">&nbsp;&nbsp;<router-link :to="{name:'reports_route'}"><i class="fa fa-area-chart fa-2x"></i>&nbsp;&nbsp;
                Reports
            </router-link>
            </li>

        </ul>
    </div>
</template>

<style>

</style>