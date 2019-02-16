
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

const axios = require('axios');

const AdminLayout = Vue.component('admin-layout', require('./admin/Layout.vue').default);
const AdminSideBar = Vue.component('admin-sidebar', require('./admin/components/AdminSideBarComponent.vue').default);
const AdminHome = Vue.component('admin-home', require('./admin/pages/Home.vue').default);
const AdminUsers = Vue.component('admin-users', require('./admin/pages/users.vue').default);
import router from './routes.js';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
/*
*/
const ExampleComponent = Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const HomeComponent = Vue.component('home-component', require('./components/HomeComponent.vue').default);
const ProfileComponent = Vue.component('profile-component', require('./components/Profile.vue').default);
const UserComponent = Vue.component('user-component', require('./pages/UserComponent.vue').default);
const UserCardComponent = Vue.component('usercard-component', require('./components/UserCardComponent.vue').default);
const FeedComponent = Vue.component('feed-component', require('./pages/FeedComponent.vue').default);
const RegisterComponent = Vue.component('register-component', require('./components/RegisterComponent.vue').default);
const Nav = Vue.component('user-nav', require('./components/UserNav.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
const routes = [
    { path: '/home', component: HomeComponent },
    { path: '/user', component: UserComponent },
    { path: '/admin', component: AdminComponent },
    { path: '/feed', component: FeedComponent },
    { path: '/profile', component: ProfileComponent },
    { path: '/example', component: ExampleComponent },
    { path: '/register', component: RegisterComponent }
];
const router = new VueRouter({
    routes
});

*/



const app = new Vue({
    el: '#app',
    data: {
        json: {},
    },
    router,
    methods: {
        setJson(payload) {
            this.json = payload
        },
    }
    ,
    mounted() {

    },
    created() {

    }
});


