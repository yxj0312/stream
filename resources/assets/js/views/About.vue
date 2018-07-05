<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message">
                    <div class="message-header">Carousel</div>

                    <div class="message-body">
                       <carousel :auto-play="true">
                            <img src="https://placeimg.com/640/480/any">
                            <img src="https://placeimg.com/640/480/any?2">
                            <img src="https://placeimg.com/640/480/any?3">
                            <img src="https://placeimg.com/640/480/any?4">
                            <img src="https://placeimg.com/640/480/any?5">
                       </carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import carousel from '../components/Carousel.vue'
    export default {
       components: { carousel }
    }
</script>
