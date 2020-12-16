<template>
    <div>
        <div class="row" style="margin-bottom: 4rem;">
            <div class="col-md-12 my-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'homepageposts' }">
                            <span>Home</span>
                        </router-link>
                    </li>
                    <li class="breadcrumb-item active">{{ title }}</li>
                </ol>
                <div class="show-content">
                    <h1>{{ title }}</h1>
                    <div class="user-cat">
                        <p>
                            <i class="fa fa-user" /> {{ user }} |

                            <router-link
                                :to="{
                                    name: 'category',
                                    params: { id: catId }
                                }"
                            >
                                <span class="badge badge-dark"
                                    >#{{ category }}</span
                                >
                            </router-link>
                        </p>
                    </div>
                    <div class="show-img">
                        <img :src="'/uploads/' + image" style="width:100%" />
                    </div>
                    <br />

                    <p>{{ body }}</p>

                    <br /><br />
                    <div class="comment-wrap">
                        <p><i class="fa fa-comments"></i> Comment:</p>
                        <form action="#">
                            <div class="form-group">
                                <input type="" class="form-control" id="" />
                            </div>
                            <button type="submit" class="btn btn-secondary">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    metaInfo() {
        return {
            title: this.title
        };
    },
    data: function() {
        return {
            title: "",
            body: "",
            image: "",
            category: "",
            user: "",
            catId: ""
        };
    },
    mounted() {
        let id = this.$route.params.slug;
        axios.get("/api/posts/" + id).then(response => {
            this.title = response.data.title;
            this.body = response.data.body;
            this.image = response.data.image;
            this.category = response.data.category.name;
            this.user = response.data.user.name;
            this.catId = response.data.category_id;
        });
    }
};
</script>
