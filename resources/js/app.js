import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import  Comments  from './components/Comments.vue'

const app  = createApp({});

app.component("comments-component" , Comments);
app.mount('#app');
