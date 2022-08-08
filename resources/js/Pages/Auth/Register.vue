<template>
<Layout>
    <Head title="Регистрация">
        <meta name="description" content="Справочник кодов по мнемотехники">
    </Head>
    <div class="d-flex justify-content-center align-items-center flex-column mb-5">
        <div class="card mt-5 w-25 p-3 rounded-3 shadow-lg">
            <h1 class="text-center">Register</h1>
            <form @submit.prevent="registerHandler">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Your name"
                        v-model="form.name"
                        @input="is_show = false"
                        autofocus
                    >
                    <div
                        v-if="errors.name && is_show"
                        class="alert alert-danger"
                        role="alert"
                    >
                        <strong>ERROR:</strong> {{ errors.name }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input
                        type="email"
                        class="form-control"
                        placeholder="name@example.com"
                        v-model="form.email"
                        @input="is_show = false"
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

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input
                        type="password"
                        class="form-control"
                        placeholder="confirm password"
                        @input="is_show = false"
                        v-model="form.password_confirmation"
                    >
                    <div
                        v-if="errors.password_confirmation && is_show"
                        class="alert alert-danger"
                        role="alert"
                    >
                        <strong>ERROR:</strong> {{ errors.password_confirmation }}
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button
                        type="submit"
                        class="btn btn-success w-50"
                    >
                        Register
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
    name: "Register",
    props: ['errors'],
    data() {
        return {
            is_show: true,
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null
            }
        }
    },
    methods: {
        registerHandler() {
            this.is_show = true
            this.$inertia.post('/register', this.form)
        }
    },
    components: {Layout, Head}
}
</script>

<style scoped>

</style>
