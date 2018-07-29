import AddEvent from '../components/events/AddEventComponent'
import ShowEvent from '../components/events/ShowEventsComponent.vue'
import UserEvent from '../components/events/UserEventsComponent.vue'

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
    },
    {
        path: '/events/all',
        name: 'UserEvents_route',
        component: UserEvent,
    }
]

export default BookingRoutes