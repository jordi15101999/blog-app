<template>
  <div
    class="form-edit"
    style="padding: 20px 20px;"
  >
    <h3 class="text-center">Edit Post</h3>

    <span v-if="successful" class="label label-success">
      <!-- <h4>Saved Successfully!</h4>
      <small>(Post baru berhasil dibuat dan dipublikasi!)</small> -->
    </span>

    <div class="container"><hr style="border-bottom: 1px solid white" /></div>
    <form>
      <div class="form-group">
        <label for="title">Title</label>
        <input
          type="text"
          class="form-control"
          id="title"
          ref="title"
          aria-describedby="titleHelp"
          placeholder="Masukkan judul"
          v-model="title"
        />
        <small
          ><span v-if="errors.title" class="text-danger">{{
            errors.title[0]
          }}</span></small
        >
      </div>

      <div class="form-group">
        <select ref="category_id" class="form-control" v-model="old_category">
          <option value="">-- Select Category --</option>
          <option v-for="category in categories" v-bind:key="category.id" v-bind:value="category.id">
            {{category.name}}
          </option>
        </select>
        <small
          ><span v-if="errors.category_id" class="text-danger">{{
            errors.category_id[0]
          }}</span></small
        >
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea
          class="form-control"
          id="body"
          ref="body"
          rows="3"
          placeholder="Masukkan isi blog"
          style="height: 150px; resize: none"
          v-model="body"
        ></textarea>
        <small
          ><span v-if="errors.body" class="text-danger">{{
            errors.body[0]
          }}</span></small
        >
      </div>

      <div class="form-group">
          <img :src="'/uploads/' + image" style="width:50%; border:1px solid black;">
      </div>

      <div class="form-group">
        <input
          type="file"
          ref="image"
          class="form-control-file"
          id="image"
          name="image"
        />
        <small
          ><span v-if="errors.image" class="text-danger">{{
            errors.image[0]
          }}</span></small
        >
      </div>

      <button
        type="submit"
        @click.prevent="updatePost"
        class="btn btn-sm btn-primary"
      >
        Submit
      </button>
        <router-link :to="{ name: 'allposts'}">
            <button type="submit" class="btn btn-sm btn-danger">Back</button>
        </router-link>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    postId: {
      type: Number,
      required: true,
    },
  },
  data: function () {
    return {
      successful: false,
      errors: [],
      categories:[],
      title:'',
      body:'',
      image:'',
      old_category:''
    };
  },

  created:function(){
    this.getCategories();
    this.getPosts();
  },

  methods: {
    updatePost() {
      const formData = new FormData();
      formData.append("title", this.$refs.title.value);
      formData.append("body", this.$refs.body.value);
      formData.append("image", this.$refs.image.files[0]);
      formData.append("category_id", this.$refs.category_id.value);
      formData.append('_method', 'PUT');

      axios
        .post("/api/posts/" + this.postId, formData)
        .then((response) => {
          console.log(response.data);
          this.getPosts();
          if ((this.successful = true)) {
            Swal.fire({
              icon: "success",
              text: "Postingan berhasil diupdate!",
            });
;
          }
          this.errors = false;
        })
        .catch((error) => {
          if((error.response.status = 422 )){
            console.log(error.response.data);
            this.errors = error.response.data.errors;
            this.successful = false;
          }
        });
      
    },
    getPosts(){
      axios.get("/api/posts/" + this.postId + '/edit')
      .then(response => {
        console.log(response.data);
        this.title = response.data.title;
        this.body = response.data.body;
        this.image = response.data.image;
        this.old_category = response.data.category_id;
      })
    },

    getCategories(){
      axios.get("/api/getCategories")
      .then(response => {
        console.log(response.data);
        this.categories = response.data;
      })
    }
  },
};
</script>
