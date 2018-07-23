import Main from '../components/layout/Main.vue';

import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

 const routes = [
    {
        path: '/',
        name: 'home',
        component: Main
    },

];

const myrouter = new VueRouter({
    mode: 'history',
    routes
})

export default myrouter