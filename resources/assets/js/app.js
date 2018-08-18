require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import 'element-ui/lib/theme-chalk/index.css'
import './configs/firebaseconfig'
//import firebase from 'firebase'

import SideBar from './components/layout/includes/SideBar.vue'
import UserSideBar from './components/layout/includes/UserSideBar.vue'
import Footer from './components/layout/includes/Footer.vue'
import DriverProfile from './components/drivers/DriversProfileComponent.vue'
import DriverAssignmentInfo from './components/drivers/AssignmentInfoComponent.vue'

import VueRouter from 'vue-router'
import router from './routes/router'
import mymixins from './mixins/all'
import VueProgressBar from 'vue-progressbar'
import store from './store/store'
//import {JWT_AUTH} from './configs/jwtAuth'

Vue.component('sidebar-component', SideBar);
Vue.component('user-sidebar-component', UserSideBar);
Vue.component('footer-component', Footer);
Vue.component('driver-profile-component', DriverProfile);
Vue.component('driver-assignmenr-component', DriverAssignmentInfo);
Vue.config.productionTip = false
Vue.use(ElementUI, { locale })
Vue.config.productionTip = true


Vue.use(VueRouter)

Vue.use(VueProgressBar, {
    color: 'rgb(0,0,0)',
    failedColor: 'red',
    height: '4px'
})





/*let app;
firebase.auth().onAuthStateChanged(function (user) {
    if (!app) {
        app = new Vue({
            router,
            store,
            mixin: [mymixins],
            el: '#app'
        });
    }
});*/


const app = new Vue({
    router,
    store,
    mixin:[mymixins],
    el: '#app'
});





