import Vue from 'vue';
require('./bootstrap');
import store from "./store";
Vue.component('show-component', require('./components/Show.vue').default);

const app = new Vue({
    store,
    el: '#app'
});
