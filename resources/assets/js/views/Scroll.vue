<template>
<div class="ais-results">
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
    <div>123</div>
</div>
</template>

<script>
    import { throttle } from 'lodash';

    export default {
        props: [],

        components: {},

        data() {
            return {
                page: 0
            }
        },

        mounted() {
            window.addEventListener('scroll', this.loadMoreResults);
        },

        computed: {
            
        },

        methods: {
            loadMoreResults: throttle(function() {
                if (this.shouldLoadMoreResults()) {
                  this.page++;  
                }
            }, 300),

            shouldLoadMoreResults() {
                // This is wrong
                let heightOfResults = ('.ais-results').height();

                let resultsDistanceFromWindowTop = ('.ais-results').offset().top;

                return (
                    window.pageYOffset >= 
                    (resultsDistanceFromWindowTop + heightOfResults) *0.7
                );
            }
        }
    }
</script>