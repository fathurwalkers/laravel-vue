import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
const Home = require('./pages/Home.vue').default;
const About = require('./pages/About.vue').default;
const NotFound = require('./pages/NotFound.vue').default;
const RouteParameter = require('./pages/RouteParameter.vue').default;
const routes = [{
        name: 'Home',
        path: '/dashboard/home',
        component: Home
    },
    {
        name: 'About',
        path: '/dashboard/about',
        component: About
    },
    {
        name: 'User',
        path: '/dashboard/user/:name?',
        component: RouteParameter,
        props: true
    },
    {
        path: '*',
        component: NotFound
    }
];
const router = new VueRouter({
    linkActiveClass: 'active',
    mode: 'history',
    routes
});
export default router