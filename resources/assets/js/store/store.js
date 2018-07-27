import Vue from 'vue'
import Vuex from 'vuex'
import Vehicles from './vehicles/index'
import Drivers from './drivers/drivers'
import Bookings from './bookings/bookings'

Vue.use(Vuex)
const store = new Vuex.Store({
    state: {},
    mutations: {},
    getters: {},
    actions: {},
    modules: {
        Vehicles,Drivers,Bookings
    }
});


export default store