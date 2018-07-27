import {MY_URLS} from '../../configs/url'

const state = {
    bookings: [],
    bookingToEdit: {}
}

const getters = {
    bookings: state => state.bookings,
    bookingToEdit: state => state.bookingToEdit,
    bookingsNo: state => state.bookings.length,
}

const mutations = {
    EDIT_BOOKING(state, bookingToEdit) {
        state.bookings = state.bookings.map(booking=>booking.id ==bookingToEdit.id? {...booking,bookingToEdit} :booking);
        console.log(bookingToEdit)
    },
    GET_ALL_BOOKINGS(state, data) {
        state.bookings = data
    },
    ADD_BOOKING(state, newBOOKING) {
        state.bookings.unshift(newbooking);
    },

    DELETE_BOOKING(state, bookingToDelete) {
        state.bookings.splice(state.bookings.indexOf(bookingsToDelete), 1);
    },
    GET_BOOKING(state, singleBookings) {
        state.bookingsToEdit = new bookingsToEdit,
            state.bookingsToEdit = singleBookings
    }

};

const actions = {
    getAllBookings(store) {
        axios.get(MY_URLS.BOOKINGS_URL).then((resp) => {
            store.commit('GET_ALL_BOOKINGS', resp.data);
            console.log(resp.data)
        })
    },
    addBooking(store, newDriver) {
        axios.post(MY_URLS.BOOKINGS_URL, newDriver).then((response) => {
            store.commit('ADD_BOOKING', response.data);
            console.log(response.data)
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    updateBooking(store, data) {
        let id = data.id
        console.log(id, 'here')

        axios.patch(MY_URLS.BOOKINGS_URL + '/' + id, data).then((response) => {
            store.commit('EDIT_BOOKING', response.data)
        })
    },
    deleteBooking(store, driverToDelete) {
        console.log(driverToDelete);
        axios.delete(MY_URLS.BOOKINGS_URL + '/' + driverToDelete.id).then((response) => {
            store.commit('DELETE_BOOKING', driverToDelete);
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    getBooking(store, id) {
        axios.get(MY_URLS.BOOKINGS_URL + '/' + id).then((response) => {
            store.commit('GET_BOOKING', response.data);
        })
    }
};

export default {
    state, getters, mutations, actions
}