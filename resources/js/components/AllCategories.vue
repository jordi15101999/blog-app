<template>
    <div class="semua-kategori">
        <h1 class="text-center mb-3">All Categories</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table
                            class="table table-dark table-striped table-bordered"
                        >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody
                                v-for="category in categories"
                                v-bind:key="category.id"
                            >
                                <tr>
                                    <td>{{ category.name }}</td>
                                    <td width="20px">
                                        <router-link
                                            :to="{
                                                name: 'editcategory',
                                                params: {
                                                    categoryId: category.id
                                                }
                                            }"
                                        >
                                            <div class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                        </router-link>
                                    </td>
                                    <td width="20px">
                                        <div
                                            v-on:click="
                                                deleteCategory(category.id)
                                            "
                                            class="btn btn-sm btn-danger"
                                        >
                                            <i class="fa fa-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <pagination
                        class="pagination"
                        v-if="pagination.last_page > 1"
                        :pagination="pagination"
                        :offset="5"
                        @paginate="getCategories()"
                    ></pagination>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import pagination from "./Pagination.vue";
export default {
    components: {
        pagination
    },
    metaInfo() {
        return {
            title: "All Categories"
        };
    },
    data: function() {
        return {
            categories: [],
            pagination: {
                current_page: 1
            }
        };
    },
    created: function() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            axios
                .get("/api/categories?page=" + this.pagination.current_page)
                .then(response => {
                    this.categories = response.data.data.data;
                    this.pagination = response.data.pagination;
                })
                .catch(error => {
                    console.log(error.response.data);
                });
        },
        deleteCategory(id) {
            // if(confirm('Are you sure?')){
            // axios.delete("/api/categories/" + id)
            // .then(response => {
            // 	this.getCategories();
            // 	Swal.fire({
            // 	icon: "success",
            // 	text: "Category berhasil dihapus!",
            // 	});
            // })
            // }
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "kategori akan dihapus",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then(result => {
                if (result.isConfirmed) {
                    axios.delete("/api/categories/" + id).then(response => {
                        this.getCategories();
                        Swal.fire({
                            icon: "success",
                            text: "Category berhasil dihapus!"
                        });
                    });
                }
            });
        }
    }
};
</script>
