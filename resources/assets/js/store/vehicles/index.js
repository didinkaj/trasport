import {MY_URLS} from '../../configs/url'

const state = {
    vehicles: [],
    vehiclesToEdit: {}
}

const getters = {
    vehicles: state => state.vehicles,
    vehiclesToEdit: state => state.vehiclesToEdit,
}

const mutations = {
    EDIT_VEHICLE(state, vehicleToEdit) {
        state.vehicles = state.vehicles.map(vehicle=>vehicle.id ==vehicleToEdit.id? {...vehicle,vehicleToEdit} :vehicle);
        console.log(vehicleToEdit)
    },
    GET_ALL_VEHICLES(state, data) {
        state.vehicles = data
    },
    ADD_VEHICLES(state, newVehicle) {
        state.vehicles.unshift(newVehicle);
    },

    DELETE_VEHICLE(state, vehicleToDelete) {
        state.vehicles.splice(state.vehicles.indexOf(vehicleToDelete), 1);
    },
    GET_VEHICLE(state, singleVehicle) {
        state.vehiclesToEdit = new vehiclesToEdit,
            state.vehiclesToEdit = singleVehicle
    }

};

const actions = {
    getAllVehicles(store) {
        axios.get(MY_URLS.VEHICLES_URL).then((resp) => {
            store.commit('GET_ALL_VEHICLES', resp.data);
        })
    },
    addVehicle(store, newVehicle) {
        axios.post(MY_URLS.VEHICLES_URL, newVehicle).then((response) => {
            store.commit('ADD_VEHICLES', response.data);
            console.log(response.data)
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    updateVehicle(store, data) {
        let id = data.id
        console.log(id, 'here')

        axios.patch(MY_URLS.VEHICLES_URL + '/' + id, data).then((response) => {
            store.commit('EDIT_VEHICLE', response.data)
        })
    },
    deleteVehicle(store, vehicleToDelete) {
        axios.delete(MY_URLS.VEHICLES_URL + '/' + vehicleToDelete.id).then((response) => {
            store.commit('DELETE_VEHICLE', vehicleToDelete);
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    getVehicle(store, id) {
        axios.get(MY_URLS.VEHICLES_URL + '/' + id).then((response) => {
            store.commit('GET_VEHICLE', response.data);
        })
    }
};

export default {
    state, getters, mutations, actions
}