import ShowBooking from '../components/bookings/ShowBookingsComponent'
import UserBooking from '../components/bookings/UserBookingComponent'
import SeatBooking from '../components/bookings/SeatReservationComponent'

const BookingRoutes = [
    {
        path: '/show/bookings',
        name: 'Showbooking_route',
        component: ShowBooking,

    },
    {
        path: '/user/booking',
        name: 'Userbooking_route',
        component: UserBooking,

    },
    {
        path: '/seat/booking',
        name: 'Seatbooking_route',
        component: SeatBooking,

    }
]

export default BookingRoutes