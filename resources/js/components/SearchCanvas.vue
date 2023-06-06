<template>

<div class="offcanvas offcanvas-start" tabindex="-1" id="searchcanvas" aria-labelledby="offcanvasExamplelabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="searchcanvaslabel">{{placeholder}}</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
  </div>
  <div class="offcanvas-body">
    <input type="text"
            v-model="data.term"
            :placeholder="props.placeholder"
            class="form-control">
  </div>
</div>
 </template>
<script setup>

import { reactive } from "vue";

const data = reactive({
    posts: [],
    term: '',
    message: ''
});

const props = defineProps({
        placeholder: {
            type: String,
            required: true
        }
    });



</script>
<style>
</style>
