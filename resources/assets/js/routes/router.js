import Vue from 'vue'
import Dashboard from '../components/dashboard/DashboardComponent.vue'
import Drivers from '../components/drivers/AddDriverComponent.vue'
import Bookings from '../components/bookings/ShowBookingsComponent.vue'
import Reports from '../components/reports/ShowComponent.vue'
import VehiclesRoutes from './vehicles'
import DriversRoutes from './drivers'
import BookingsRoutes from './bookings'
import EventsRoutes from './events'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

 const routes = [
     {
         path: '/',
         name: 'default_route',
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
     },
     ...generateRoutesFromMenu(VehiclesRoutes),
     ...generateRoutesFromMenu(DriversRoutes),
     ...generateRoutesFromMenu(BookingsRoutes),
     ...generateRoutesFromMenu(EventsRoutes),

];

function generateRoutesFromMenu (menu = [], routes = []) {
    for (let i = 0, l = menu.length; i < l; i++) {
        let item = menu[i]
        if (item.path) {
            routes.push(item)
        }
        if (item.children) {
            generateRoutesFromMenu(item.children, routes)
        }
    }
    return routes
}

const myrouter = new VueRouter({
    mode: 'history',
    routes
})

setTimeout(() => {
    console.log(myrouter.currentRoute.path);
}, 0);

export default myrouter