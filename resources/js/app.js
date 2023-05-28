import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import  Comments  from './components/Comments.vue'
import  AddComment  from './components/AddComment.vue'
import  CommentsCount  from './components/CommentsCount.vue'

const app  = createApp({});

app.component("comments-component" , Comments);
app.component("add-comment-component" , AddComment);
app.component("comments-count-component" , CommentsCount);
app.mount('#app');
