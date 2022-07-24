<template>
    <Layout>
        <Head title="Welcome"/>
        <h1>Home Page</h1>
        <form
            @submit.prevent="searchFilterHandler"
            class="d-flex justify-content-around mb-3"
        >
            <select
                v-if="categories && categories.length"
                v-model="form.category"
                @change="selectHandler"
                name="category"
                class="form-select"
                style="max-width: 200px;"
            >
                <option value="all">All</option>
                <option
                    v-for="(cat, i ) in categories"
                    :value="cat"
                    :key="i"
                >
                    {{ cat }}
                </option>
            </select>

            <div
                class="input-group"
                style="max-width: 350px;"
            >
                <input
                    type="search"
                    class="form-control"
                    v-model="form.search"
                    ref="focusMe"
                    placeholder="Global search"
                    @input="searchHandler"
                >
                <span class="input-group-text">{{ textFound }}</span>
            </div>

            <select
                class="form-select"
                style="max-width: 80px;"
                v-model="form.pagination"
                @change="selectHandler"
            >
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </form>
        <div
            class="d-flex justify-content-around flex-wrap"
            v-if="cards.data.length"
        >
            <Card
                v-for="card in cards.data"
                :card="card"
                :key="card.id"
            />
        </div>
        <div
            v-if="cards.links.length"
            class="d-flex justify-content-center"
        >
            <Pagination
                :form="form"
                :links="cards.links"
            />
        </div>
    </Layout>
</template>

<script>
import ExampleComponent from "../components/ExampleComponent";
import Layout from "../components/Layout";
import {Head} from '@inertiajs/inertia-vue'
import Card from "../components/UI/Card";
import Pagination from "../components/UI/Pagination";

export default {
    name: "HomePage",
    props: ['cards', 'categories'],
    data() {
        return {
            form: {
                pagination: '10',
                category: 'all',
                search: '',
                page: '1'
            },
        }
    },
    methods: {
        searchHandler() {
            console.log('search', this.form)
            this.form.category = 'all'
            this.searchFilterHandler()
        },
        selectHandler() {
            this.form.page = '1'
            this.form.search = ''
            this.searchFilterHandler()
        },
        searchFilterHandler() {
            console.log('form', this.form)
            this.$inertia.get('/', this.form)
        },
        getUrlData() {
            const queryString = window.location.search
            if (queryString) {
                const urlParams = new URLSearchParams(queryString);
                console.log('queryString', queryString)
                const category = urlParams.get('category')
                this.form.category = category ?? 'all'
                const pagination = urlParams.get('pagination')
                this.form.pagination = pagination ?? '10'
                const page = urlParams.get('page')
                this.form.page = page ?? '1'
                const search = urlParams.get('search')
                this.form.search = search ?? ''
                if (search) this.$refs.focusMe.focus()
            }
        }
    },
    computed: {
        textFound() {
            if (this.form.search) {
                return `Найдено - ${this.cards.total}`
            }
            return `Всего - ${this.cards.total}`
        }
    },
    components: {
        ExampleComponent,
        Layout,
        Head,
        Card,
        Pagination
    },
    mounted() {
        console.log('cards', this.cards)
        this.getUrlData()
    }
}
</script>

<style scoped>

</style>
