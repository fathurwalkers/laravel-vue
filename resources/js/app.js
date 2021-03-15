require('./bootstrap');
import Vue from 'vue';
import router from './routes.js';

Vue.component('test-component', require('./components/TestComponent.vue').default);

Vue.component('header-component', require('./components/layouts/Header.vue').default);
Vue.component('main-component', require('./components/layouts/MainContent.vue').default);
Vue.component('footer-component', require('./components/layouts/Footer.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Semua!'
    },
    router
});