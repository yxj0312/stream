<template>
    <div class="fixed z-50">
        <a
            class="bg-blue hover:bg-blue-dark rounded-full w-16 h-16 text-center flex items-center justify-center
            shadow-lg"
            @click="$modal.show('add-reply-modal')"
        >
            +
        </a>
    </div>
</template>

<script>
    export default {
        props: [],

        components: {},

        data() {
            return {
                
            }
        },

        computed: {
            
        },

        methods: {
            
        }
    }
</script>