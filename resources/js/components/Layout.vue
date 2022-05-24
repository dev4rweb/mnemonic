<template>
    <main>
        <header>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/contacts">Contact</Link>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    name: "Layout",
    components: {
        Link,
    },
    mounted() {
        console.log('Layout $page.url', this.$page)
    }
}
</script>

<style scoped>

</style>
