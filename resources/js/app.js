require('./bootstrap');

window.Vue = require('vue').default;

import Admin from './components/Admin';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify'
import axios from 'axios';
import { routes } from './routes';
import 'vuetify/dist/vuetify.min.css'
import Vue from 'vue'

Vue.use(VueRouter);
Vue.use(Vuetify);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    vuetify : new Vuetify(),
    el: '#app',
    router: router,
    render: h => h(Admin),
});
