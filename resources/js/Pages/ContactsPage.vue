<template>
<Layout>
    <Head title="Contacts Page" />
    <div class="container">Contact Page</div>
    <button class="btn btn-success"><i class="bi bi-3-circle-fill"></i> Button</button>
</Layout>
</template>

<script>
import {Head} from '@inertiajs/inertia-vue'
import Layout from "../components/Layout";
export default {
    name: "ContactsPage",
    components: {
        Head, Layout
    },
}
</script>

<style scoped>

</style>
