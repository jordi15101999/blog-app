<template>
  <div
    class="form-create"
    style="padding: 20px 20px;"
  >
    <h3 class="text-center">Create New Post</h3>

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
        />
        <small
          ><span v-if="errors.title" class="text-danger">{{
            errors.title[0]
          }}</span></small
        >
      </div>

      <div class="form-group">
        <select ref="category_id" class="form-control">
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
        ></textarea>
        <small
          ><span v-if="errors.body" class="text-danger">{{
            errors.body[0]
          }}</span></small
        >
      </div>

      <div class="form-group">
        <label for="image">Gambar</label>
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
        @click.prevent="create"
        class="btn btn-sm btn-primary"
      >
        Submit
      </button>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    userId: {
      type: Number,
      required: true,
    },
  },
  data: function () {
    return {
      successful: false,
      errors: [],
      categories:[],
    };
  },

  created:function(){
    this.getCategories();
  },

  methods: {
    create() {
      const formData = new FormData();
      formData.append("title", this.$refs.title.value);
      formData.append("body", this.$refs.body.value);
      formData.append("user_id", this.userId);
      formData.append("image", this.$refs.image.files[0]);
      formData.append("category_id", this.$refs.category_id.value);

      axios
        .post("/api/posts", formData)
        .then((response) => {
          console.log(response.data);
          if ((this.successful = true)) {
            Swal.fire({
              icon: "success",
              text: "Postingan baru berhasil ditambahkan dan dipublikasi!",
            });
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
      this.$refs.title.value = "";
      this.$refs.body.value = "";
      this.$refs.image.value = "";
      this.$refs.category_id.value = "";
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
