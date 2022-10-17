<template>
    <div :class="class">
        <p>{{ label }}</p>
        <input 
            v-model="val"
            @input="updateVal"
            :required="required"
            :type="inputType"
            class="rounded-med drop-shadow focus:outline-none h-8 w-full"
        >
        <p class="text-red-500 text-sm">{{ error }}</p>
    </div>  
</template>
<script>

    export default {
        props: {
            inputType: {
                default: 'text'
            },
            required: {
                default: true,
            },
            label: {},
            class: {},
            variable: {},
            error: {}
        },

        methods: {
            updateVal() {
                this.$emit('updateVal', {
                    variable: this.variable,
                    value: this.val
                });
            }
        },

        data() {
            return {
                val: '',
            }
        },
    }
</script>