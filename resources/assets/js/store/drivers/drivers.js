import {MY_URLS} from '../../configs/url'

const state = {
    drivers: [],
    driversToEdit: {},
    driverProfileInfo:{},
}

const getters = {
    drivers: state => state.drivers,
    driversToEdit: state => state.driversToEdit,
    driversNo: state => state.drivers.length,
    driverInfo: state => state.driverProfileInfo,

}

const mutations = {
    EDIT_DRIVER(state, driverToEdit) {
        state.drivers = state.drivers.map(driver=>driver.id ==driverToEdit.id? {...driver,driverToEdit} :driver);
        console.log(driverToEdit)
    },
    GET_ALL_DRIVERS(state, data) {
        state.drivers = data
    },
    ADD_DRIVER(state, newDriver) {
        state.drivers.unshift(newDriver);
    },

    DELETE_DRIVER(state, driverToDelete) {
        state.drivers.splice(state.drivers.indexOf(driverToDelete), 1);
    },
    GET_DRIVER(state, singleDriver) {
        state.driverToEdit = new driverToEdit,
            state.driverToEdit = singleDriver
    },
    GET_DRIVER_LOGGEDIN(state, data) {
            state.driverProfileInfo = data

    }

};

const actions = {
    getAllDrivers(store) {
        axios.get(MY_URLS.DRIVERS_URL).then((resp) => {
            store.commit('GET_ALL_DRIVERS', resp.data);
        })
    },
    addDriver(store, newDriver) {
        return new Promise((resolve, reject) => {
            axios.post(MY_URLS.DRIVERS_URL, newDriver).then((response) => {
                store.commit('ADD_DRIVER', response.data);
                resolve(response);
            }).catch((error) => {
                reject(error.response);
            });
        });
    },
    updateDriver(store, data) {
        let id = data.id
        console.log(id, 'here')

        axios.patch(MY_URLS.DRIVERS_URL + '/' + id, data).then((response) => {
            store.commit('EDIT_DRIVER', response.data)
        })
    },
    deleteDriver(store, driverToDelete) {
        console.log(driverToDelete);
        axios.delete(MY_URLS.DRIVERS_URL + '/' + driverToDelete.id).then((response) => {
            store.commit('DELETE_DRIVER', driverToDelete);
        }).catch(error => {
            return Promise.reject(error.response);
        });
    },
    getDriver(store, id) {
        axios.get(MY_URLS.DRIVERS_URL + '/' + id).then((response) => {
            store.commit('GET_DRIVER', response.data);
        })
    },
    getLoggedInDriver(store, id) {
        axios.get(MY_URLS.DRIVERS_URL + '/logged/in').then((response) => {
            store.commit('GET_DRIVER_LOGGEDIN', response.data);
        })
    }
};

export default {
    state, getters, mutations, actions
}