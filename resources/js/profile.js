/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue').default;
 import 'bootstrap'
 import 'bootstrap/dist/css/bootstrap.min.css'
import {routes} from './router'
 Vue.component('profileCover', require('./profile/profileCover.vue').default);
 import VueRouter from 'vue-router'

 Vue.use(VueRouter)
  
 const router = new VueRouter({
    routes,
    mode:'history',
    base:'laraecomm'
  })
 
 const app = new Vue({
     el: '#profile-vue',
     router
 });
 