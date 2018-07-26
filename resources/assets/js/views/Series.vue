<template>
<div class="hero is-info">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h3 class="title">Option #1</h3>

            <p class="subtitle">
                Hello there, <span data-tooltip="I am a tooltip" data-tooltip-placement="left">hover over me</span>
            </p>

            <p class="subtitle">
                Hello there again, <span data-tooltip="So we meet again" data-tooltip-placement="bottom">hover over me again</span>
            </p>

            <hr>

            <h3 class="title">Option #2</h3>

            <p class="subtitle">
                <!-- this is expression of argument Or modifier v-tooltip.top-> get top:true  -->
                Hello there, <span v-tooltip:top="'Here is another way to make a tooltips.'">hover over me</span>
            </p>

            <hr>

            <h3 class="title">Option #3</h3>

            <p class="subtitle">
                Hello there again, <span data-tooltip-name="our-products-tooltip">learn about our products.</span>
            </p>

            <tooltip name="our-products-tooltip" placement="top" offset="0, 20">
                <h1 class="title">Our Products</h1>

                <p class="subtitle">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                </p>
            </tooltip>

            <hr>

            <render></render>
        </div>
    </div>
</div>
</template>

<script>
    import render from '../components/Render.vue'
    export default {
        components: { render }
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
