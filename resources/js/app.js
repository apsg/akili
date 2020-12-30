/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('../contactform/js/main');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('particles', require('./components/Particles.vue').default);
Vue.component('panel', require('./components/Panel.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('scroll-button', require('./components/ScrollButton.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    data() {
        return {type: ''}
    },

    methods: {
        changeType(type) {
            this.type = type;
        }
    }
});

$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $('#nav').removeClass('nav-transparent')
            .removeClass('navbar-dark')
            .addClass('navbar-light');
    } else {
        $('#nav').addClass('nav-transparent')
            .removeClass('navbar-light')
            .addClass('navbar-dark');
    }
});

$('.scrollto').click(function () {
    let sectionTo = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(sectionTo).offset().top
    }, 500);
});
