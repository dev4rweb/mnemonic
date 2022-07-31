<template>
<Layout>
    <Head title="Мнемотехника">
        <meta name="description" content="Справочник кодов по мнемотехники">
    </Head>
    <div class="d-flex justify-content-center align-items-center flex-column mb-5">
        <div class="card mt-5 w-25 p-3 rounded-3 shadow-lg">
            <h1 class="text-center">Auth</h1>
            <form @submit.prevent="submitHandler">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input
                        type="email"
                        class="form-control"
                        placeholder="name@example.com"
                        v-model="form.email"
                        @input="is_show = false"
                        autofocus
                    >
                    <div
                        v-if="errors.email && is_show"
                        class="alert alert-danger"
                        role="alert"
                    >
                        <strong>ERROR:</strong> {{ errors.email }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        placeholder="password"
                        @input="is_show = false"
                        v-model="form.password"
                    >
                    <div
                        v-if="errors.password && is_show"
                        class="alert alert-danger"
                        role="alert"
                    >
                        <strong>ERROR:</strong> {{ errors.password }}
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        v-model="form.remember"
                    >
                    <label class="form-check-label">
                        Remember
                    </label>
                </div>
                <div class="d-flex justify-content-center">
                    <button
                        type="submit"
                        class="btn btn-success w-50"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</Layout>
</template>

<script>
import Layout from "../../components/Layout";
import {Head} from '@inertiajs/inertia-vue'
export default {
    name: "Login",
    components: {Layout, Head},
    props: ['errors'],
    data() {
        return {
            is_show: true,
            form: {
                email: null,
                password: null,
                remember: false
            }
        }
    },
    methods: {
        submitHandler() {
            this.is_show = true
            this.$inertia.post('/login', this.form)
        }
    }
}
</script>

<style scoped>

</style>
