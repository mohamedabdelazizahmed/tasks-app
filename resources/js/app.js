import {createApp} from 'vue'
import createUser from './components/create-user.vue';
const app = createApp({});
app.component('create-user', createUser );
app.mount("#app");
import './bootstrap';
