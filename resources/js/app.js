import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import { library } from '@fortawesome/fontawesome-svg-core'

import { faUser, faCircleNotch } from '@fortawesome/free-solid-svg-icons'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUser, faCircleNotch);

const app = createApp(App);
app.use(router);
app.component('f-a-i', FontAwesomeIcon);
app.mount('#app');
