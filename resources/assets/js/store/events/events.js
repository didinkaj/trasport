import {MY_URLS} from '../../configs/url'

const state = {
    events: [],
    eventsNo:'',
    eventsToEdit: {}
}

const getters = {
    events: state => state.events,
    eventsToEdit: state => state.eventsToEdit,
    eventsNo: state => state.eventsNo,
}

const mutations = {
    EDIT_EVENT(state, eventsToEdit) {
        state.events = state.events.map(event=>event.id ==eventToEdit.id? {...event,eventToEdit} :event);
        console.log(eventToEdit)
    },
    GET_ALL_EVENT(state, data) {
        state.events = data
    },
    ADD_EVENT(state, newEvent) {
        state.events.unshift(newEvent);
    },

    DELETE_EVENT(state, eventToDelete) {
        state.events.splice(state.events.indexOf(eventToDelete), 1);
    },
    GET_EVENT(state, singleEvent) {
        state.eventToEdit = new eventToEdit,
            state.eventToEdit = singleEvent
    },
    COUNT_EVENTS(state, num){
        console.log(num)
        state.eventsNo = num
    }

};

const actions = {
    getAllEvents(store) {
        axios.get(MY_URLS.EVENTS_URL).then((resp) => {
            store.commit('GET_ALL_EVENT', resp.data);
        })
    },
    countAllEvents(store) {
        axios.get(MY_URLS.EVENTS_URL + '/count').then((resp) => {
            store.commit('COUNT_EVENTS', resp.data);
        })
    },
    addEvent(store, newEvent) {
        console.log(newEvent);
        axios.post(MY_URLS.EVENTS_URL, newEvent).then((response) => {
            store.commit('ADD_EVENT', response.data);
            console.log(response.data)
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    updateEvent(store, data) {
        let id = data.id

        axios.patch(MY_URLS.EVENTS_URL + '/' + id, data).then((response) => {
            store.commit('EDIT_EVENT', response.data)
        })
    },
    deleteEvent(store, eventToDelete) {
        console.log(eventToDelete);
        axios.delete(MY_URLS.EVENTS_URL + '/' + eventToDelete.id).then((response) => {
            store.commit('DELETE_EVENT', eventToDelete);
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    getEvent(store, id) {
        axios.get(MY_URLS.EVENTS_URL + '/' + id).then((response) => {
            store.commit('GET_EVENT', response.data);
        })
    }
};

export default {
    state, getters, mutations, actions
}