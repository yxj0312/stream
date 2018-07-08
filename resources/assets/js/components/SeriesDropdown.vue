<template>
    <div @mouseover="active = true" @mouseout="active = false">
        <router-link tag="li" to="/series">
            <a>Series</a>
        </router-link>

        
        <portal to="nav-after">
            <div v-show="active" 
                @mouseover="active = true"
                @mouseout="active = false"
                class="section"
                style="height: 300px; background: red"
            >
                <div class="container">
                    Hello
                </div>
            </div>
        </portal>
    </div>
</template>

<script>
    export default {
        props: [],

        components: {},

        data() {
            return {
                active: false
            }
        },

        computed: {
            
        },

        methods: {
            
        }
    }
</script>