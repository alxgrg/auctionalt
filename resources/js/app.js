import Form from './classes/forms/Form';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Form = Form;

window.events = new Vue();
window.flash = function (message, level = 'success') {
    window.events.$emit('flash', { message, level });
};

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('flash', require('./components/Flash.vue'));
Vue.component('contact-form', require('./components/forms/ContactForm.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



// // Nav burger Toggle
// $(document).ready(function() {

// 	// Check for click events on the navbar burger icon
// 	$(".navbar-burger").click(function() {

// 		// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
// 		$(".navbar-burger").toggleClass("is-active");
// 		$(".navbar-menu").toggleClass("is-active");

// 		// Toggle aria-expanded 
// 		if ($(".navbar-burger").hasClass("is-active")) {
// 			$(".navbar-burger").attr("aria-expanded","true");
// 		}else {
// 			$(".navbar-burger").attr("aria-expanded","false");
// 		}
// 	});
// });



const app = new Vue({
    el: '#app',
    data: {
    	isActive: false
    }
});
