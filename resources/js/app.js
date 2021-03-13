import Vue from 'vue';

require('./bootstrap');

// window.Vue = require('vue').default;

Vue.component('test-component', require('./components/TestComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Semua!',
    }
});