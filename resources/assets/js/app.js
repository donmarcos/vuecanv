
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


import * as VueGoogleMaps from 'vue2-google-maps';
import VuejsDialog from "vuejs-dialog";
import VueRouter from 'vue-router';
import router from './routes';

Vue.use(VuejsDialog);
Vue.use(VueRouter);

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyDFANAVF92YlUst_vCLm6dxQsRCb91JYqM',
    libraries: 'places', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)
  }
})

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('googlecomponent', require('./components/GoogleComponent.vue'));

const app = new Vue({
    el: '#app',
    router
});

//Vue.config.devtools = true;