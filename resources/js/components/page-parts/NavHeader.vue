<template>
    <nav class="navbar navbar-dark bg-success navbar-expand-lg">
        <div class="container-fluid">
            <Link
                class="navbar-brand"
                href="/"
            >
                Мнемотехника
            </Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse"
                id="navbarSupportedContent">
                <Link
                    class="btn btn-sm btn-warning"
                    v-if="this.$page.props.user"
                    href="/logout"
                    method="post"
                    as="button"
                >
                    {{ this.$page.props.user.name }} - Logout
                </Link>
<!--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link
                            class="nav-link"
                            href="/"
                            :class="{'active': $page.url === '/'}"
                        >
                            Справочник
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link
                            class="nav-link"
                            href="/about"
                            :class="{'active': $page.url === '/about'}"
                        >
                            О проекте
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link
                            class="nav-link"
                            href="/contacts"
                            :class="{'active': $page.url === '/contacts'}"
                        >
                            Contact
                        </Link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>-->
<!--                <form
                    class="d-flex"
                    role="search"
                >
                    <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    >
                    <button
                        class="btn btn-success"
                        type="submit"
                    >
                        Search
                    </button>
                </form>-->
            </div>
        </div>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'
export default {
    name: "NavHeader",
    components: {
        Link
    }
}
</script>

<style scoped>
.bg-primary {
    /*background-color: #69fa03;*/
}
</style>
