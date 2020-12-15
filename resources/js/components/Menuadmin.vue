<template>
    <ul
        class="navbar-nav sidebar sidebar-light bg-white accordion"
        id="accordionSidebar"
    >
        <!-- Sidebar - Brand -->
        <a
            class="sidebar-brand d-flex align-items-center justify-content-center"
            href="#"
        >
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="sidebar-brand-text mx-3">ADMIN</div>
        </a>

        <hr class="sidebar-divider my-0" />

        <li class="nav-item">
            <router-link
                :to="{ name: 'dashboard' }"
                class="nav-link"
                style="text-decoration: none"
            >
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </router-link>
        </li>

        <hr class="sidebar-divider" />
        <li class="nav-item">
            <router-link
                :to="{ name: 'allposts' }"
                class="nav-link"
                style="text-decoration: none"
            >
                <i class="fas fa-fw fa-list"></i>
                <span>All Posts</span>
            </router-link>
        </li>
        <hr class="sidebar-divider" />

        <li class="nav-item">
            <router-link
                :to="{ name: 'allcategories' }"
                class="nav-link"
                style="text-decoration: none"
            >
                <i class="fas fa-fw fa-list"></i>
                <span>All Categories</span>
            </router-link>
        </li>
        <hr class="sidebar-divider" />

        <li class="nav-item">
            <router-link
                :to="{ name: 'createpost', params: { userId } }"
                class="nav-link"
                style="text-decoration: none"
            >
                <i class="fas fa-fw fa-plus-square"></i>
                <span>New Post</span>
            </router-link>
        </li>
        <hr class="sidebar-divider" />

        <li class="nav-item">
            <router-link
                :to="{ name: 'createcategory', params: { userId } }"
                class="nav-link"
                style="text-decoration: none"
            >
                <i class="fas fa-fw fa-plus-square"></i>
                <span>New Category</span>
            </router-link>
        </li>

        <hr class="sidebar-divider" />
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
</template>

<script>
export default {
    props: {
        userId: {}
    }
};
</script>
