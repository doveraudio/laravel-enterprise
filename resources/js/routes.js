import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter);
const AdminLayout = Vue.component('admin-layout', require('./admin/Layout.vue').default);
const AdminSideBar = Vue.component('admin-sidebar', require('./admin/components/AdminSideBarComponent.vue').default);
const AdminHome = Vue.component('admin-home', require('./admin/pages/Home.vue').default);
const AdminUsers = Vue.component('admin-users', require('./admin/pages/users.vue').default);
export default new VueRouter([
    {
        path: '/user',
        name: 'user-layout',
        component: Vue.component('user-layout', require('./user/Layout.vue').default)
    },
    {
        path: '/admin',
        name: 'admin',
        components: {
            'admin-layout': AdminLayout,
            sidebar: AdminSideBar
        },
        children: [
            {
                path: '/home',
                name: 'home',
                component: AdminHome

            },
            {
                path: '/users',
                name: 'users',
                component: AdminUsers

            },
        ]
    },
    {
        path: '/dev',
        name: 'dev-layout',
        component: Vue.component('dev-layout', require('./dev/Layout.vue').default)
    },
    {
        path: '/guest',
        name: 'guest-layout',
        component: Vue.component('guest-layout', require('./guest/Layout.vue').default)
    }

]);

