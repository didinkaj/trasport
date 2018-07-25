import Example from '../components/ExampleComponent.vue'
import Dashboard from '../components/dashboard/DashboardComponent.vue'
import Vehicles from '../components/vihecles/AddVihicleComponent.vue'
import Drivers from '../components/drivers/AddDriverComponent.vue'
import Bookings from '../components/bookings/ShowComponent.vue'
import Reports from '../components/reports/ShowComponent.vue'

import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

 const routes = [
     {
         path: '/',
         name: 'home_route',
         component: Dashboard
     },
    {
        path: '/home',
        name: 'home_route',
        component: Dashboard
    },
     {
         path:'/dashboard',
         name:'dashboard_route',
         component:Dashboard
     },
     {
         path:'/vehicles',
         name:'vehicle_route',
         component:Vehicles
     },
     {
         path:'/drivers',
         name:'driver_route',
         component:Drivers
     },
     {
         path:'/bookings',
         name:'bookings_route',
         component:Bookings
     },
     {
         path:'/reports',
         name:'reports_route',
         component:Reports
     }

];

const myrouter = new VueRouter({
    mode: 'history',
    routes
})
setTimeout(() => {
    console.log(myrouter.currentRoute.path);
}, 0);

export default myrouter