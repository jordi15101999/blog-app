<template>
  <div>
    <div class="row" style="margin-bottom: 4rem;">
            <strong><h2 class="my-4">{{category.name}}</h2></strong>
            <div class="row">
                <div class="col-md-6" v-for="post in category.posts" v-bind:key="post.id" style="padding-bottom: 25px;">          
                <div class="card rounded-0 p-0 shadow-sm">
                    <img :src="'/uploads/' + post.image" class="card-img-top rounded-0" alt=""/>
                    <div class="card-body">
                        <h6 class="card-title"> {{post.title }}</h6>

                        <router-link :to="{name: 'readpost', params: {slug: post.slug} }">
                        <button type="button" class="btn btn-secondary btn-sm float-right">
                            Read More &rarr;
                        </button> 
                        </router-link>
                    </div>
                </div>          
        </div>
    </div>
    </div> 
  </div>
</template>

<script>
  export default{
    metaInfo(){
      return{
        title: this.category.name

      }
    },
    data: function(){
      return {
          category:{}
      }
    },
    mounted (){
      let id = this.$route.params.id;
      axios.get("/api/categories/" + id)
      .then(response => {
        // console.log(response.data)
        this.category = response.data;
      })
    }
  }
</script>