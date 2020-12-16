<template>
    <div class="semua-posts">
        <h1 class="text-center mb-3">All Posts</h1>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Categories</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody
                        class="text-center"
                        v-for="post in posts"
                        v-bind:key="post.id"
                        v-bind:value="post.id"
                    >
                        <tr>
                            <td>{{ post.title }}</td>
                            <td>
                                <img
                                    style="width:200px;height:100px;"
                                    :src="'/uploads/' + post.image"
                                />
                            </td>
                            <td>{{ post.category.name }}</td>
                            <td width="20px">
                                <router-link
                                    :to="{
                                        name: 'editpost',
                                        params: { postId: post.id }
                                    }"
                                >
                                    <div class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </div>
                                </router-link>
                            </td>
                            <td width="20px">
                                <div
                                    class="btn btn-sm btn-danger"
                                    v-on:click="deletePost(post.id)"
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
                @paginate="getPosts()"
            ></pagination>
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
            title: "All Posts"
        };
    },
    data: function() {
        return {
            posts: [],
            pagination: {
                current_page: 1
            }
        };
    },
    created: function() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios
                .get("/api/posts?page=" + this.pagination.current_page)
                .then(response => {
                    this.posts = response.data.data.data;
                    this.pagination = response.data.pagination;
                });
        },
        deletePost(id) {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Postingan akan dihapus",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then(result => {
                if (result.isConfirmed) {
                    axios.delete("/api/posts/" + id).then(response => {
                        this.getPosts();
                        Swal.fire({
                            icon: "success",
                            text: "Postingan berhasil dihapus!"
                        });
                    });
                }
            });
        }
    }
};
</script>
