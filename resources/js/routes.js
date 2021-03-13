import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter)

const Home = require('./pages/Home.vue').default;
const About = require('./pages/About.vue').default;
const NotFound = require('./pages/NotFound.vue').default;
const RouteParameter = require('./pages/RouteParameter.vue').default;

const routes = [{
        path: '/home',
        component: Home
    },
    {
        path: '/about',
        component: About
    },
    {
        path: '/user/:name?',
        component: RouteParameter,
        props: true
    },
    {
        path: '*',
        component: NotFound
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router