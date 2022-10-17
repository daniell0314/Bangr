<template>
    <div class="h-screen flex bg-blue-50">
        <div class="bg-white w-1/3 h-1/2 m-auto rounded-2xl drop-shadow flex-col flex">

            <Field
                inputType="text"
                @updateVal="updateVal"
                label="Full Name"
                class="m-auto"
                variable="name"
            />

            <Field
                inputType="email"
                @updateVal="updateVal"
                label="Email"
                class="m-auto"
                variable="email"
            />

            <Field
                inputType="password"
                @updateVal="updateVal"
                label="Password"
                class="m-auto"
                variable="password"
                :error="meetsPasswordRequirements"
            />

            <Field
                inputType="password"
                @updateVal="updateVal"
                label="Confirm Password"
                class="m-auto"
                variable="passwordConfirm"
                :error="doPasswordsMatch"
            />

            <button class="bg-green-400 w-1/2 m-auto text-white rounded-lg h-12" @click="signUp">Sign Up</button>
        </div>
    </div>  
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
import { usePage } from '@inertiajs/inertia-vue3'
import Field from '@/views/components/forms/field.vue'

export default {
    components: {
        Field: Field
    },

    props: ['error'],

    methods: {
        updateVal(payload) {
            this.form[payload.variable] = payload.value;
        },
        signUp() {
            Inertia.post('signUp', this.form);
        },
    },

    computed: {
        doPasswordsMatch() {
            if (this.form.password === this.form.passwordConfirm) {
                return '';
            }
            return 'Passwords do not match';
        },
        meetsPasswordRequirements() {
            return this.form.password.length !== 0 && this.form.password.length < 8 ? 'Password must be at least 8 characters' : ''
        }
    },
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                passwordConfirm: '',
            },
            errorMessage: '',
        }
    },

}
</script>