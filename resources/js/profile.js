/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue').default;
 import 'bootstrap'
 import 'bootstrap/dist/css/bootstrap.min.css'

 Vue.component('profileVue', require('./profile/profileVue.vue').default);
 

 
 const app = new Vue({
     el: '#app',
 });
 