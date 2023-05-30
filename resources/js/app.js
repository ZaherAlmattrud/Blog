import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import { createPinia } from 'pinia'
import  Comments  from './components/Comments.vue'
import  AddComment  from './components/AddComment.vue'
import  CommentsCount  from './components/CommentsCount.vue'

const app  = createApp({});
const pinia = createPinia()
app.use(pinia);

app.component("comments-component" , Comments);
app.component("add-comment-component" , AddComment);
app.component("comments-count-component" , CommentsCount);
app.mount('#app');
