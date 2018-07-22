<template>
    <nav ref="banner" class="breadcrumb is-right" aria-label="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#">Bulma</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Components</a></li>
                <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
            </ul>
        </div>
    </nav>
</template>

<script>
    import {throttle} from 'lodash';

    export default {
        props: [],

        components: {},


        data() {
            return {
                
            }
        },

        computed: {
            
        },

        mounted() {
            // can only get this refs value after rendered, which means, created() can not get this value
            let bar = this.$refs['banner'];
            let originalOffsetTop = this.$refs['banner'].offsetTop;

            window.addEventListener(
                'scroll',
                throttle(function(){
                    console.log('I was called');
                    if (window.scrollY >= originalOffsetTop) {
                        bar.classList.add(
                            'navbar',
                            'is-fixed-top'
                        ) 
                    } else {
                    bar.classList.remove(
                            'navbar',
                            'is-fixed-top'
                        );
                    }
                }, 300)
            );
        },

        methods: {
            
        }
    }
</script>