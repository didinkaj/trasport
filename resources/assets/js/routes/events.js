import AddEvent from '../components/events/AddEventComponent'
import ShowEvent from '../components/events/ShowEventsComponent.vue'

const BookingRoutes = [
    {
        path: '/add/event',
        name: 'AddEvent_route',
        component: AddEvent,
    },
    {
        path: '/show/event',
        name: 'ShowEvents_route',
        component: ShowEvent,
    }
]

export default BookingRoutes