<template>
    <!-- render function will be better, see next episode 45 -->
    <!-- <div ref="body" v-show="false"> can be used to ref this dom, if there's still a wrapper outside-->
    <div v-show="false">
        <slot></slot>
    </div>
</template>

<script>
    import PopperTooltip from 'tooltip.js';

    export default {
        props: {
            name: {},
            placement: { default: 'top'},
            offset: { default: false }
        },

        mounted() {
            document.querySelectorAll(`[data-tooltip-name=${this.name}]`).forEach(elem => {
                new PopperTooltip(elem, {
                    placement: this.placement,
                    title: this.$el.innerHTML,
                    offset: this.offset,
                    html: true
                });   
            });
        },

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