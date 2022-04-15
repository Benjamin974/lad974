import Vue from 'vue';
import VueRouter from 'vue-router';

//@ts-ignore
import Home from './views/home/Home.vue';

//@ts-ignore
import Companies from './views/companies/Companies.vue';

//@ts-ignore
import Company from './views/company/Company.vue';

//@ts-ignore
import StepCommand from './views/stepCommand/StepCommand.vue';

//@ts-ignore
import CompanyDashboard from './views/dashboards/company/Articles.vue';

//@ts-ignore
import Login from './auth/Login.vue';

//@ts-ignore
import Register from './auth/Register.vue';

//@ts-ignore
import Test from './views/test/Test.vue';

//@ts-ignore
import _ from 'lodash'
import { authenticationService } from './_services/authenticationService';




Vue.use(VueRouter);
const routes = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/companies',
            name: 'companies',
            component: Companies,

        },
        {
            path: '/company/:id',
            name: 'company',
            component: Company,

        },
        {
            path: '/test',
            name: 'test',
            component: Test,

        },
        {
            path: '/dashboard/company/article',
            name: 'company-dashboard',
            component: CompanyDashboard,
            meta: { authorize: [] }

        },
        {
            path: '/step-command',
            name: 'step-command',
            component: StepCommand,
            meta: { authorize: true }

        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
    ]

})

routes.beforeEach((to, from, next) => {

    // redirect to login page if not logged in and trying to access a restricted page
    const { authorize }: any = to.meta;

    if (authorize && !_.isEmpty(authorize)) {

        const currentUser = authenticationService.currentUserValue;

        if (!currentUser) {
            // not logged in so redirect to login page with the return url
            return next({ path: "/login", query: { returnUrl: to.path } });
        }
        // check if route is restricted by role
        if (authorize.length && !authorize.includes(currentUser.role.name)) {
            // role not authorised so redirect to home page
            return next({ path: "/" });
        }

    }

    return next();
});


export default routes;