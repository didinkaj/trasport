require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en';
import 'element-ui/lib/theme-chalk/index.css';

import SideBar from './components/layout/includes/SideBar.vue'
import Footer from './components/layout/includes/Footer.vue'
import VueRouter from 'vue-router'
import router from './routes/router'
import mymixins from './mixins/all'
import VueProgress from 'vue-progress'
import store from './store/store'


Vue.component('sidebar-component', SideBar);
Vue.component('footer-component', Footer);
Vue.config.productionTip = false
Vue.use(ElementUI, { locale })

Vue.use(VueProgress)
Vue.use(VueRouter)


const app = new Vue({
    router,
    store,
    mixin:[mymixins],
    el: '#app'
});




