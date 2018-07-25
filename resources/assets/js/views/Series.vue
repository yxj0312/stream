<template>
<div class="container has-text-centered">
    <h3>Option #1</h3>

    <p>
        Hello there, <span data-tooltip="I am a tooltip" data-tooltip-placement="left">hover over me</span>
    </p>

    <p>
        Hello there again, <span data-tooltip="So we meet again" data-tooltip-placement="bottom">hover over me again</span>
    </p>

    <hr>

    <h3>Option #2</h3>

     <p>
        <!-- this is expression of argument Or modifier v-tooltip.top-> get top:true  -->
        Hello there, <span v-tooltip:top="'Here is another way to make a tooltips.'">hover over me</span>
    </p>

    <hr>
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
