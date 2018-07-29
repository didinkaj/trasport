import UserDashBoard from '../components/dashboard/user/UserDashboardComponent.vue'
import UserProfile from '../components/profiles/UserProfileComponent.vue'

const BookingRoutes = [
    {
        path: '/user/home',
        name: 'ShowuserDashboard_route',
        component: UserDashBoard,

    },
    {
        path: '/myprofile',
        name: 'ShowuserProfile_route',
        component: UserProfile,

    }
]

export default BookingRoutes