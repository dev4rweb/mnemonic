<template>
    <Layout>
        <Head title="Welcome"/>
        <h1>Home Page</h1>
        <div
            class="d-flex justify-content-around flex-wrap"
            v-if="cards.length"
        >
            <Card
                v-for="card in cards"
                :card="card"
                :key="card.id"
            />
        </div>
    </Layout>
</template>

<script>
import ExampleComponent from "../components/ExampleComponent";
import Layout from "../components/Layout";
import { Head } from '@inertiajs/inertia-vue'
import Card from "../components/UI/Card";
export default {
    name: "HomePage",
    props: ['cards'],
    methods: {

    },
    components: {
        ExampleComponent,
        Layout,
        Head,
        Card
    },
    mounted() {
        console.log('cards', this.cards)
    }
}
</script>

<style scoped>

</style>
