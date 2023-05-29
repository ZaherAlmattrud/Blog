<template>
        <form @submit.prevent="addComment">
        <div class="mb-2 p-3">
          <textarea placeholder="start typing ...." v-model="data.body" :required="true" class="form-control"   cols="30" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-primary m-3">
            Add
        </button>

        </form>
 </template>
<script setup>

import {reactive} from 'vue';

const props = defineProps({
 user_id : {
  type :Number ,
  required : true
 },

  post_id : {
  type :Number ,
  required : true
 },

});

const data = reactive({
   body:''

});

const addComment = async ()=>{

    try{
           const respone = await axios.post('/api/add/comment',{

            user_id : props.user_id,
            post_id : props.post_id,
            body : data.body
           });

           console.log(respone.data);

    }catch( error ){
        console.log(error);
    }

};

</script>
<style>
</style>

