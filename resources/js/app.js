require('./bootstrap');

import App from "../components/App";
import Vue from "vue";
import VueRouter from "vue-router";
import CV from "../components/CV";
import Form from "../components/Form";
import LogIn from "../components/LogIn";
import Panel from "../components/Panel";
import Register from "../components/Register";
Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/form',
            name: 'form',
            component: Form
        },
        {
            path: '/',
            name: 'Cv',
            component: CV
        },
        {
            path: '/login',
            name: 'login',
            component: LogIn
        },
        {
            path: '/panel',
            name: 'panel',
            component: Panel
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },

    ]
})


const app = new Vue ({
    el:'#app',
    components:{App},
    router
})
