<template>
    <main>
        <header>
            <NavHeader />
<!--            <Link href="/">Home</Link>-->
<!--            <Link href="/about">About</Link>-->
<!--            <Link href="/contacts">Contact</Link>-->
<!--            <Link href="/endpoint" method="post" :data="{ foo: bar }">Save</Link>-->
<!--            <Link href="/logout" method="post" as="button" type="button">Logout</Link>-->
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
import NavHeader from "./page-parts/NavHeader";
import { Link } from '@inertiajs/inertia-vue'
export default {
    name: "Layout",
    components: {
        Link, NavHeader
    },
    mounted() {
        console.log('Layout $page.url', this.$page)
    }
}
</script>

<style scoped>

</style>
