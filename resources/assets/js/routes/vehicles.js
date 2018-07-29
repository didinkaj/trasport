import AddVehicle from '../components/vehicle/AddVehicleComponent.vue'
import ShowVehicles from '../components/vehicle/ShowVehicleComponent.vue'
import EditVehicleComponent from '../components/vehicle/EditVehicleComponent.vue'
import AssignDriver from '../components/vehicle/AssignDriverComponent.vue'


const VehiclesRoutes = [
    {
        path: '/vehicles',
        name: 'addvehicle_route',
        component: AddVehicle,
        props: true,

    },
    {
        path: '/ShowVehicles',
        name: 'Showvehicles_route',
        component: ShowVehicles,
        props: true,
    },
    {
        path:'/vehicles/edit/:vehicleDatas',
        name: 'editvehicles_route',
        component: EditVehicleComponent
    },
    {
        path:'/vehicles/add/driver/:vehicleDatas',
        name: 'addDriverToVehicles_route',
        props: true,
        component: AssignDriver
    }

]
export default VehiclesRoutes;