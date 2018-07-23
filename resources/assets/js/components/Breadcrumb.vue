<template>
    <div><slot></slot></div>
</template>

<script>
    import {throttle} from 'lodash';

    export default {
        mounted() {
            // can only get this refs value after rendered, which means, created() can not get this value
            let el = this.$el;
            let originalOffsetTop = this.$el.offsetTop;

            window.addEventListener(
                'scroll',
                throttle(function(){
                    el.classList[
                        window.scrollY >= originalOffsetTop ? 'add' : 'remove'
                    ](
                       'navbar',
                       'is-fixed-top' 
                    );
                    // if (window.scrollY >= originalOffsetTop) {
                    //     el.classList.add(
                    //         'navbar',
                    //         'is-fixed-top'
                    //     ) 
                    // } else {
                    // el.classList.remove(
                    //         'navbar',
                    //         'is-fixed-top'
                    //     );
                    // }
                }, 300)
            );
        },
    }
</script>