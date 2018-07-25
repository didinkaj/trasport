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
    }

};

const actions = {
    getAllVehicles(store){
        axios.get('/api/allusers').then((resp)=>{
            store.commit('GET_ALL_VEHICLES',resp.data);
        })
    },
    addVehicle(store, newVehicle){
        axios.post('api/save/vihecle', newVehicle).then(function (response) {
            store.commit('ADD_VEHICLES',response.data);
        });

    }
};

export default {
    state, getters, mutations, actions
}