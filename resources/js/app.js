require("./bootstrap");

window.Vue = require("vue");

// import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);
import VueMeta from 'vue-meta'
Vue.use(VueMeta)

import WelcomeAdmin from "./components/WelcomeAdmin";
import Menuadmin from "./components/Menuadmin";
// Posts 
import CreatePost from "./components/CreatePost";
import AllPosts from "./components/AllPosts";
import EditPost from "./components/EditPost";
import ReadPost from "./components/ReadPost";
// Categories 
import AllCategories from "./components/AllCategories";
import EditCategory from "./components/EditCategory";
import CreateCategory from "./components/CreateCategory";
import ShowCategory from "./components/ShowCategory";
// Blog
import HomepagePosts from "./components/HomepagePosts";
import Menuhomepage from './components/Menuhomepage'
import Navbarhome from './components/Navbarhome'
// import Contact from './components/Contact'
import About from './components/About'




const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "homepageposts",
            component: HomepagePosts
        },
        {
            path: "/read/:slug",
            name: "readpost",
            component: ReadPost
        },
        {
            path: "/category/:id",
            name: "category",
            component: ShowCategory
        },
        {
            path: "/about",
            name: "about",
            component: About
        },
        // {
        //     path: "/contact",
        //     name: "contact",
        //     component: Contact,
        //     props: true
        // },
        {
            path: "/admin/dashboard",
            name: "dashboard",
            component: WelcomeAdmin
        },
        {
            path: "/admin/createpost",
            name: "createpost",
            component: CreatePost,
            props: true
        },
        {
            path: "/admin/allposts",
            name: "allposts",
            component: AllPosts,
            props: true
        },
        {
            path: "/admin/editpost/:postId/edit",
            name: "editpost",
            component: EditPost,
            props: true
        },
        {
            path: "/admin/allcategories",
            name: "allcategories",
            component: AllCategories,
            props: true
        },
        {
            path: "/admin/editcategory/:categoryId/edit",
            name: "editcategory",
            component: EditCategory,
            props: true
        },
        {
            path: "/admin/createcategory",
            name: "createcategory",
            component: CreateCategory,
            props: true
        },
    ]
});

const app = new Vue({
    el: "#app",
    router,
    components: { Menuadmin, Menuhomepage, Navbarhome}
});
