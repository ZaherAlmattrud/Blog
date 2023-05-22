import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import  App  from './components/App.vue'

const app  = createApp({});

app.component("app-component" , App);
app.mount('#app');
