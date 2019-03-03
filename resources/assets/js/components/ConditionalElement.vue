<template>
    <transition name="fade">
        <div v-show="isVisible">
            <slot></slot>
        </div>
    </transition>
</template>

<script>
import inViewport from 'in-viewport';

    export default {
        props: ['whenHidden'],

        components: {},

        data() {
            return {
                isVisible: false
            }
        },

        mounted() {
            // Passive event listeners can greatly improve scrollinig performance.
            window.addEventListener('scroll', this.checkDisplay, { passive: true });
        },

        computed: {
            
        },

        methods: {
            checkDisplay() {
                this.isVisible = !inViewport(
                    document.querySelector(this.whenHidden)
                );
            }
        }
    }
</script>

<style>
    .fade-enter-active, 
    .fade-leave-active {
        transition: opacity .3s;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>