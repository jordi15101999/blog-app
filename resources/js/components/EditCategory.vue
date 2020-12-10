<template>
  <div
    class="form-edit"
    style="padding: 20px 20px;"
  >
    <h3 class="text-center">Edit Category</h3>

    <div class="container"><hr style="border-bottom: 1px solid white" /></div>
    <form>
      <div class="form-group">
        <label for="name">Category</label>
        <input type="text" class="form-control" ref="name" name="name" id="name" placeholder="Name">
      </div>

      <button type="submit" @click.prevent="updateCategory" class="btn btn-sm btn-primary">Submit</button>
        <router-link :to="{ name: 'allcategories'}">
            <button type="submit" class="btn btn-sm btn-danger">Back</button>
        </router-link>
    </form>
  </div>
</template>

<script>
export default {
    props:{
      categoryId:{
        type: Number,
        required : true
      }
    },
    data:function(){
      return{
        successful: false,
        errors:[], 
      }
    },
    created:function(){
      this.getCategory(); 
    },
    methods:{
      updateCategory(){
        let name = this.$refs.name.value;
        axios.put('/api/categories/' + this.categoryId, {name} )
          .then(response => {
            console.log(response.data);
            if((this.successful = true)){
                Swal.fire({
              icon: "success",
              text: "Kategori berhasil diupdate!",
            });
            }
            this.errors = false;
          })
          .catch(error => {
            if((error.response.status = 422 )){
            console.log(error.response.data);
            this.errors = error.response.data.errors;
            this.successful = false;
            }
          }); 
      }, 
      getCategory(){
        axios.get("/api/categories/" + this.categoryId + "/edit")
          .then(response => {
            console.log(response.data.name);
            this.$refs.name.value = response.data.name;
            })
      }
    }
}
</script>