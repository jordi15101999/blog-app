<template>
<div>
        <h2 class="my-4 text-center" style="padding:10px 0;">
          Welcome to My Blog!
        </h2>
      
        <div class="kartu-home" v-for="post in posts" v-bind:key="post.id">
          <div class="card mb-4" id="kartu-home">
                <img :src="'/uploads/' + post.image" class="card-img-top" alt="Gambar Post">
                <div class="card-body">
                  <h2 class="card-title">{{post.title }}</h2>
                  <p class="card-text">{{getPostBody(post)}}</p>
                  <router-link :to="{name: 'readpost', params: {slug: post.slug} }">
                  <button type="button" class="btn btn-sm btn-dark">
                  Read More &rarr;
                  </button> 
                  </router-link>
                </div>
          </div>
        </div>

  <pagination class="pagination" v-if="pagination.last_page > 1" :pagination="pagination" :offset="5" @paginate="getPosts()"></pagination>

</div>
</template> 


<script>
  import pagination from "./Pagination.vue";
  export default{
    components:{
      pagination
    },
    data: function(){
      return {
        posts: [],
        pagination: {
				'current_page': 1
			},
      }
    },
    created: function(){
      this.getPosts();
    },
    methods:{
      getPosts(){
        axios.get("/api/getHomepagePosts?page=" + this.pagination.current_page)
        .then(response => {
          // console.log(response.data)
          this.posts = response.data.data.data;
          this.pagination = response.data.pagination;
        })
        .catch(error => {
          // console.log(error.response.data)
        })
      },

      getPostBody (post) {
            let body = this.stripTags(post.body);

            return body.length > 300 ? body.substring(0, 100) + '...' : body;           
        },

        stripTags (text) {
            return text.replace(/(<([^>]+)>)/ig, '');
        }
    }
  }
</script>