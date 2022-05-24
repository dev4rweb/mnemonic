<template>
    <Layout>
        <Head title="Welcome"/>
        <h1>Home Page</h1>
    </Layout>
</template>

<script>
import ExampleComponent from "../components/ExampleComponent";
import Layout from "../components/Layout";
import { Head } from '@inertiajs/inertia-vue'
export default {
    name: "HomePage",
    components: {
        ExampleComponent,
        Layout,
        Head
    },
}
</script>

<style scoped>

</style>
