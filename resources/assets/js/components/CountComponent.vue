<template>
    <span v-text="count"></span>
</template>

<script>
import inView from 'in-viewport';

    export default {
        props: ['to'],

        components: {},

        data() {
            return {
                count: 0,
                interval: null
            }
        },

        mounted() {
            inView(this.$el, ()=> {
                this.interval = setInterval(this.tick, 40)
            })
        },

        computed: {
            increment() {
                return Math.ceil(this.to / 30);
            }
        },

        methods: {
            tick() {
                if (this.count + this.increment >= this.to) {
                    this.count = this.to;

                    return clearInterval(this.interval);
                }

                this.count += this.increment;                
            }
        }
    }
</script>