 <template>

    <div class="d-flex-column">
        <div class="flex" v-for="comment in store.getComments" :key="comment.id">
            <div class="flex-shrink-0">
                <span class="fw-bold">
                   {{ comment.user.name }}
                </span>
            </div>
            <div class="flex-grow-1 ms-3">
                <span class="text-muted">
                   <i>   {{ comment.created_at}}</i>
                </span>
                <p>
                    {{ comment.body}}
                </p>
            </div>
        </div>
    </div>

 </template>
<script setup>

import {useCommentsStore} from '@/Stores/useCommentsStore.js';
import { onMounted } from 'vue';
const store = useCommentsStore();

const props = defineProps({
        post_id: {
            type: Number,
            required: true
        }
    });

onMounted(() => store.fetchComments(props.post_id));


</script>
<style>
</style>
