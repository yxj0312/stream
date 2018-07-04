<template>
    <div class="content">
        <ul>
            <li v-for="item in items" :key="item.id">
                <slot name="menu-item" :item="item">{{ item }}</slot>
                <!-- <slot thing="foo" bar="bar">{{ item }}</slot> -->
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props:['items'],

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