import AddVehicle from '../components/vehicle/AddVehicleComponent.vue'
import ShowVehicles from '../components/vehicle/ShowVehicleComponent.vue'


const VehiclesRoutes = [
    {
        path: '/vehicles',
        name: 'addvehicle_route',
        component: AddVehicle
    },
    {
        path: '/ShowVehicles',
        name: 'Showvehicles_route',
        component: ShowVehicles
    }

]
export default VehiclesRoutes;