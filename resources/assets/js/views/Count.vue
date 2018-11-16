<template>
    <div class="example" style="padding-top: 1000px">
        <div class="flex justify-center">
            <div class="bg-grey rounded-lg p-4 mx-4">
                <count :to="11"></count>
            </div>

            <div class="bg-grey rounded-lg p-4 mx-4">
                <count :to="5"></count>
            </div>

            <div class="bg-grey rounded-lg p-4 mx-4">
                <count :to="1955"></count>
            </div>
        </div>
    </div>

</template>

<script>
import count from '../components/CountComponent';
    export default {
        props: [],

        components: {
            count
        },

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