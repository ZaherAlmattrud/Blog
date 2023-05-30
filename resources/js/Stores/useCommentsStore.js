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
