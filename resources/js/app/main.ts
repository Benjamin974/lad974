
import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

import router from './routes';
import { store } from './store';
import vuetify from './vuetify';

//@ts-ignore
import Layout from './layouts/Layout.vue';

//@ts-ignore
import _ from 'lodash';

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    vuetify,
    router: router,
    store,
    components: { Layout },
})

export default new Vuetify(app);