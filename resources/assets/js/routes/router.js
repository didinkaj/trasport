import Example from '../components/ExampleComponent.vue';

import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

 const routes = [
    {
        path: '/',
        name: 'home',
        component: Example
    },

];

const myrouter = new VueRouter({
    mode: 'history',
    routes
})

export default myrouter