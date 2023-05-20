import './bootstrap';
import { createApp } from 'vue';
import store from './store/index';
import App from './App.vue';
import router from './router';
import { library } from '@fortawesome/fontawesome-svg-core'

import { faUser, faCircleNotch, faLocationDot, faPaperPlane, faEnvelope, faAt, faClockRotateLeft, faArrowLeftLong, faGlobe, faMagnifyingGlass, faPenToSquare, faTrashAlt, faTimes, faArrowRightFromBracket, faGripLines } from '@fortawesome/free-solid-svg-icons'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUser, faCircleNotch, faLocationDot, faPaperPlane, faEnvelope, faAt, faClockRotateLeft, faArrowLeftLong, faGlobe, faMagnifyingGlass, faPenToSquare, faTrashAlt, faTimes, faArrowRightFromBracket, faGripLines);

const app = createApp(App);
app.use(router);
app.use(store);
app.component('f-a-i', FontAwesomeIcon);

app.config.globalProperties.$_ = _

app.mount('#app');
