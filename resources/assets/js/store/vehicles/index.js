const state = {

    vehicles: [],

}

const getters = {
    vehicles: state => state.vehicles,
}

const mutations = {
    ADD_VEHICLES(state, newVehicle) {
        state.vehicles.unshift(newVehicle);
    },
    GET_ALL_VEHICLES(state,data){
        state.vehicles = data
    },
    DELETE_VEHICLE(state,vehicleToDelete){
        state.vehicles.splice( state.vehicles.indexOf(vehicleToDelete), 1 );
    }

};

const actions = {
    getAllVehicles(store){
        axios.get('/api/allusers').then((resp)=>{
            store.commit('GET_ALL_VEHICLES',resp.data);
        })
    },
    addVehicle(store, newVehicle){
        axios.post('api/save/vihecle', newVehicle).then((response) => {
            store.commit('ADD_VEHICLES',response.data);
        }).catch( error => {
            return Promise.reject(error.response);
        });
    },
    deleteVehicle(store, vehicleToDelete){
        console.log(vehicleToDelete)
        axios.delete('api/delete/vihecle/'+ vehicleToDelete.id).then( (response) => {
            store.commit('DELETE_VEHICLE',vehicleToDelete);
        }).catch( error => {
            return Promise.reject(error.response);
        });
    }
};

export default {
    state, getters, mutations, actions
}