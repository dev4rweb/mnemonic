<template>
    <Layout>
        <Head>
            <title>Your page title</title>
            <meta name="description" content="Your page description">
            <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        </Head>
        <h1>About</h1>
    </Layout>
</template>

<script>
import {Head} from '@inertiajs/inertia-vue'
import Layout from "../components/Layout";

export default {
    name: "AboutPage",
    components: {
        Head, Layout
    },
    mounted() {

        console.log('AboutPage', Head)
    }
}
</script>

<style scoped>

</style>
