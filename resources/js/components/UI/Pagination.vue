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
                <button
                    class="page-link"
                    v-if="link.url"
                    @click="clickHandler(link.label)"
                >
                    <b v-html="link.label"></b>
                </button>
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
    props: ['links', 'form'],
    methods: {
        clickHandler(label) {
            console.log('label', label)
            let page = null
            if (label.includes('Previous')) page = parseInt(this.form.page) - 1
            if (label.includes('Next')) page = parseInt(this.form.page) + 1
            this.form.page = page ?? label
            this.$inertia.get('/', this.form)
        }
    },
    components: {
        Link
    }
}
</script>

<style scoped>

</style>
