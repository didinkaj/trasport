import AddDriver from '../components/drivers/AddDriverComponent'
import ShowDrivers from '../components/drivers/ShowDriversComponent'
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

    }
]

export default DriversRoutes