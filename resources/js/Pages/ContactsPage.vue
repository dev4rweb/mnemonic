<template>
    <Layout>
        <Head title="Contacts Page"/>
        <div class="container">Contact Page</div>
        <button class="btn btn-success"><i class="bi bi-3-circle-fill"></i> Button</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse est fuga minus quasi ullam voluptate! Error ex
            iste provident quia.</p>
        <p>Change in master</p>
        <div>
            Some changes
        </div>
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
