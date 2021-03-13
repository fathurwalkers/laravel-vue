require('./bootstrap');
import Vue from 'vue';
import router from './routes.js';

Vue.component('test-component', require('./components/TestComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Semua!',
    },
    router
});