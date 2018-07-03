
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./custom_js/bootstrap.min');
require('./custom_js/jquery.dcjqaccordion.2.7');
require('./custom_js/jquery');
require('./custom_js/jquery.nicescroll');
require('./custom_js/jquery.scrollTo.min');
require('./custom_js/common-scripts');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
