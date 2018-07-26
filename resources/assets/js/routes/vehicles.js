import AddVehicle from '../components/vehicle/AddVehicleComponent.vue'
import ShowVehicles from '../components/vehicle/ShowVehicleComponent.vue'
import EditVehicleComponent from '../components/vehicle/EditVehicleComponent.vue'


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
    }

]
export default VehiclesRoutes;