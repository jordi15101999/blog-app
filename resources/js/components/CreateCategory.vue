<template>
  <div
    class="form-create"
    style="padding: 20px 20px;"
  >
    <h3 class="text-center">Create Category</h3>

    <div class="container"><hr style="border-bottom: 1px solid white" /></div>
    <form>
      <div class="form-group">
        <label for="name">Category</label>
        <input type="text" class="form-control" id="name" ref="name" placeholder="Masukkan nama kategori">
        <small
          ><span v-if="errors.name" class="text-danger">{{
            errors.name[0]
          }}</span></small
        >
      </div>

      <button type="submit" @click.prevent="createCategory" class="btn btn-sm btn-primary">Submit</button>
        <router-link :to="{ name: 'allcategories'}">
            <button type="submit" class="btn btn-sm btn-danger">Back</button>
        </router-link>
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
    };
  },

  methods: {
    createCategory() {
      const formData = new FormData();
      formData.append("name", this.$refs.name.value);
      formData.append("user_id", this.userId);
    
      axios
        .post("/api/categories", formData)
        .then((response) => {
          console.log(response.data);
          if ((this.successful = true)) {
            Swal.fire({
              icon: "success",
              text: "Kategori baru berhasil ditambahkan!",
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
      this.$refs.name.value = "";
    },
    
  },
};
</script>
