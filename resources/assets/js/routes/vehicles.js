import AddVehicle from '../components/vehicle/AddVehicleComponent.vue'
import ShowVehicles from '../components/vehicle/ShowVehicleComponent.vue'
import EditVehicleComponent from '../components/vehicle/EditVehicleComponent.vue'
import AssignDriver from '../components/vehicle/AssignDriverComponent.vue'


const VehiclesRoutes = [
    {
        path: '/vehicles',
        name: 'addvehicle_route',
        component: AddVehicle,

    },
    {
        path: '/ShowVehicles',
        name: 'Showvehicles_route',
        component: ShowVehicles,
    },
    {
        path:'/vehicles/edit/:id',
        name: 'editvehicles_route',
        component: EditVehicleComponent
    },
    {
        path:'/vehicles/add/driver',
        name: 'addDriverToVehicles_route',
        component: AssignDriver
    }

]
export default VehiclesRoutes;