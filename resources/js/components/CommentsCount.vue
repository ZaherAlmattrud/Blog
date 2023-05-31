 <template>

    <h3 class="my-3">
    Comments  {{ store.comments.length }}
    </h3>

 </template>
<script setup>

import {useCommentsStore} from '@/Stores/useCommentsStore.js';
const store = useCommentsStore();

</script>
<style>
</style>
