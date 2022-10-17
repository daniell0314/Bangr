<template>
    <div class="h-screen flex bg-blue-50">
        <div class="bg-white w-1/4 h-1/2 m-auto rounded-2xl drop-shadow flex-col flex">
            <div class="m-auto">
                <h2>email</h2>
                <input v-model="form.email" required type="email" class="drop-shadow focus:outline-none h-8">
            </div>
            <div class="m-auto">
                <h2>Password</h2>
                <input v-model="form.password" required type="password" class="drop-shadow focus:outline-none h-8">
                <div class="text-red-500 text-sm text-center pt-2">
                    {{error}}
                </div>
            </div>
            
            <div class="m-auto w-2/3">
                <button :class="'w-full text-white rounded-lg h-12 ' + signInButtonDisabled" @click="signIn" :disabled="isDisabled">Login</button>
                <div class="text-center cursor-pointer" @click="resetPassword">
                    Forgot Password?
                </div>
            </div>
            <button class="bg-green-400 w-1/2 m-auto text-white rounded-lg h-12" @click="signUp">Sign Up</button>
        </div>
    </div>  
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
import { usePage } from '@inertiajs/inertia-vue3'

export default {
    props: ['error'],

    methods: {
        signIn() {
            Inertia.post('/login', this.form);
        },
        resetPassword() {

        },
        signUp() {
            Inertia.get('/signUp');
        },
    },

    computed: {
        isDisabled() {
            if (this.form.email.length < 1 || this.form.password.length < 1) {
                return true;
            }
            return false;
        },
        signInButtonDisabled() {
            if (this.form.email.length < 1 || this.form.password.length < 1) {
                return 'bg-slate-400 cursor-not-allowed';
            }
            return 'bg-blue-700';
        }
    },
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            errorMessage: '',
        }
    },

}
</script>