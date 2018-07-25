<template>
<div class="container has-text-centered">
    <p>
        Hello there, <span data-tooltip="I am a tooltip" data-tooltip-placement="left">hover over me</span>
    </p>

    <p>
        Hello there again, <span data-tooltip="So we meet again" data-tooltip-placement="bottom">hover over me again</span>
    </p>
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

<style>
    .tooltip {
        background: black;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }
</style>
