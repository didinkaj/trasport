import ShowMaintainances from '../components/maintainance/MaintainanceComponent.vue'
import AddToMaintenances from '../components/maintainance/VehicleMaintenanceComponent.vue'

const MaintainanceRoutes = [
    {
        path: '/show/maintainance',
        name: 'Showmaintainance_route',
        component: ShowMaintainances,

    },
    {
        path: '/addVehicle/to/maintenance/{vehicleDatas}',
        name: 'addToMaintenance_route',
        props:true,
        component: AddToMaintenances,

    }
]

export default MaintainanceRoutes