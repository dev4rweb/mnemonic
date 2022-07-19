<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li
                v-for="(link, i) in links"
                v-if="link.url || link.label.includes('...')"
                :key="i"
                class="page-item"
                :class="{ active: link.active, disabled: !link.url }"
            >
                <Link
                    class="page-link"
                    v-if="link.url"
                    :href="link.url"
                >
                    <b v-html="link.label"></b>
                </Link>
                <div
                    v-else
                    class="page-link"
                >
                    <b v-html="link.label"></b>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'
export default {
    name: "Pagination",
    props: ['links'],
    components: {
        Link
    }
}
</script>

<style scoped>

</style>
