import Vue from 'vue'
import Vuex from 'vuex'
import Vehicles from './vehicles/index'

Vue.use(Vuex)
const store = new Vuex.Store({
    state: {},
    mutations: {},
    getters: {},
    actions: {},
    modules: {
        Vehicles
    }
});


export default store