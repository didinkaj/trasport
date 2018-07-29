import {MY_URLS} from '../../../configs/url'

const state = {
    driversAssignedToVehicle: [],
    driversAssignedToVehicleNo:'',
    vehiclesAssigned:{}

}

const getters = {
    driversAssignedToVehicle: state => state.driversAssignedToVehicle,
    driversAssignedToVehicleNo: state => state.driversAssignedToVehicle.length,
    vehiclesAssigned: state => state.vehiclesAssigned
}

const mutations = {
    EDIT_DRIVER_ASSIGNMENT(state, eventsToEdit) {
        state.events = state.events.map(event=>event.id ==eventToEdit.id? {...event,eventToEdit} :event);
        console.log(eventToEdit)
    },
    GET_ALL_DRIVER_ASSIGNMENTS(state, data) {
        state.events = data
    },
    ADD_DRIVER_ASSIGNMENT(state, newEvent) {
        state.events.unshift(newEvent);
    },

    DELETE_DRIVER_ASSIGNMENT(state, eventToDelete) {
        state.events.splice(state.events.indexOf(eventToDelete), 1);
    },
    GET_DRIVER_ASSIGNMENT(state, data) {
        state.driversAssignedToVehicle = [],
            state.driversAssignedToVehicle = data
    },
    COUNT_DRIVER_ASSIGNMENTS(state, num){
        console.log(num)
        state.eventsNo = num
    },
    GET_DRIVER_VEHICLES(state, info){
        state.vehiclesAssigned = info
    }

};

const actions = {
    getAllDriverAssignment(store) {
        axios.get(MY_URLS.DRIVER_ASSIGNMENT_URL).then((resp) => {
            store.commit('GET_ALL_DRIVER_ASSIGNMENT', resp.data);
        })
    },
    countAllDriverAssignments(store) {
        axios.get(MY_URLS.DRIVER_ASSIGNMENT_URL + '/count').then((resp) => {
            store.commit('COUNT_DRIVER_ASSIGNMENT', resp.data);
        })
    },
    addDriverAssignment(store, newAssignment) {
        console.log(newAssignment);
        axios.post(MY_URLS.DRIVER_ASSIGNMENT_URL, newAssignment).then((response) => {
            store.commit('ADD_DRIVER_ASSIGNMENT', response.data);
            console.log(response.data)
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    updateDriverAssignment(store, data) {
        let id = data.id

        axios.patch(MY_URLS.DRIVER_ASSIGNMENT_URL + '/' + id, data).then((response) => {
            store.commit('EDIT_DRIVER_ASSIGNMENT', response.data)
        })
    },
    deleteDriverAssignment(store, eventToDelete) {
        console.log(eventToDelete);
        axios.delete(MY_URLS.DRIVER_ASSIGNMENT_URL + '/' + eventToDelete.id).then((response) => {
            store.commit('DELETE_DRIVER_ASSIGNMENT', eventToDelete);
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    getDriverAssignments(store, id) {
        axios.get(MY_URLS.DRIVER_ASSIGNMENT_URL + '/' + id).then((response) => {
            store.commit('GET_DRIVER_ASSIGNMENT', response.data);
        })
    },
    getDriversVehicle(){
        axios.get(MY_URLS.DRIVER_ASSIGNMENT_URL+ '/all' ).then((response) => {
            store.commit('GET_DRIVER_VEHICLES', response.data);
        })
    }
};

export default {
    state, getters, mutations, actions
}