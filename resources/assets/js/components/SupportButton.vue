<template>
    <div>
        <a
            @click="$modal.show('contact-support-modal')"
        >
            Support
        </a>

        <modal
            name="contact-support-modal"
            height="auto"
            width="100%"
            :pivotY="1"
            classes="card"
        >
            <!-- <div class="">
                123
                contents
            </div> -->
       <header class="card-header">
            <h1 class="card-header-title">
                Hava a Question?
            </h1>
            <a href="#" class="card-header-icon" aria-label="more options">
            <span class="icon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            </a>
        </header>
        <div class="card-content">
            <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
            <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
            </div>
        </div>
        <footer class="card-footer">
            <a href="#" class="card-footer-item">Save</a>
            <a href="#" class="card-footer-item">Edit</a>
            <a href="#" class="card-footer-item">Delete</a>
        </footer>
        </modal>
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