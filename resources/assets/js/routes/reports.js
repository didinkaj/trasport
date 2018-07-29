import ShowBooking from '../components/reports/ShowComponent'
import UserReports from '../components/reports/UserComponent.vue'

const BookingRoutes = [
    {
        path: '/show/reports',
        name: 'Showreports_route',
        component: ShowBooking,

    },
    {
        path: '/show/myreports',
        name: 'UserReports_route',
        component: UserReports,

    }
]

export default BookingRoutes