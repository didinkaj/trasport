import AddDriver from '../components/drivers/AddDriverComponent'
import ShowDrivers from '../components/drivers/ShowDriversComponent'
import EditDriver from '../components/drivers/EditDriverComponent.vue'
import AssignDrivers from '../components/drivers/AssignmentInfoComponent'
const DriversRoutes = [
    {
        path: '/add/driver',
        name: 'addDriver_route',
        component: AddDriver,

    },
    {
        path: '/show/drivers',
        name: 'Showdrivers_route',
        component: ShowDrivers,
    },
    {
        path: '/assign/vehicle/driver',
        name: 'Assigndriver_route',
        component: AssignDrivers,
    },
    {
        path: '/edit/driver',
        name: 'editDriver_route',
        component: EditDriver,
    }
]

export default DriversRoutes