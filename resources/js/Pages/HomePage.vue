<template>
    <Layout>
        <Head title="Welcome"/>
        <h1>Home Page</h1>
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
                :links="cards.links"
            />
        </div>
    </Layout>
</template>

<script>
import ExampleComponent from "../components/ExampleComponent";
import Layout from "../components/Layout";
import { Head } from '@inertiajs/inertia-vue'
import Card from "../components/UI/Card";
import Pagination from "../components/UI/Pagination";
export default {
    name: "HomePage",
    props: ['cards'],
    methods: {

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
    }
}
</script>

<style scoped>

</style>
