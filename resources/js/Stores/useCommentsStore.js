import { defineStore } from 'pinia'

export const useCommentsStore = defineStore('comments', {
  // arrow function recommended for full type inference
  state: () => {
    return {
       comments:[]
    }
  },

  getters:{

    getComments: (state)=>state.comments

  },
  actions:{

    async fetchComments(post_id){

         try{

             const response = await axios.get('/api/comments/${post_id}');
             this.comments = response.data ;
             
         }catch(error){
             console.log(error)
         }
    },
    async storeComment( user_id ,  post_id ,  body) {

        console.log( "fffffffffff")
    try{
        const respone = await axios.post('/api/add/comment',{

        user_id,
        post_id,
        body
        });

        this.comments.unshift(respone.data);
 }catch( error ){
     console.log(error);
 }
}

  }
})
