import './bootstrap';
import { createApp } from 'vue';
import App from './src/App.vue';
import router from './src/router';
import { library } from '@fortawesome/fontawesome-svg-core'

import { faUser } from '@fortawesome/free-solid-svg-icons'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUser);

const app = createApp(App);
app.use(router);
app.component('f-a-i', FontAwesomeIcon);
app.mount('#app');
