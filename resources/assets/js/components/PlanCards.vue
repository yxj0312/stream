<template>
    <div>
        <div class="mx-auto bg-green-light" style="max-width: 1500px">
            <div class="flex">
                <div class="md:w-3/4 mx-auto text-center mb-8 text-white">
                    <h1>Heading</h1>
                    <div class="mx-auto"> 
                        <div class="">
                            <button
                                class="block w-full font-bold h-full text-white text-xs uppercase"
                                @click="changeCategory('personalPlans')"
                            >
                                Personal
                            </button>
                        </div>
                        <div class="">
                            <button
                                class="block w-full font-bold h-full text-white text-xs uppercase"
                                @click="changeCategory('teamPlans')"
                            >
                                Teams
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [

        ],

        components: {},

        data() {
            return {
                
            }
        },

        computed: {
            
        },

        watch: {
            category(newCategory) {
                this.$emit('category-changed', newCategory); 
            }
        },

        methods: {
            changeCategory(category) {
                this.category = category;

                this.$emit('change-category', category);
            },

            onClick(chosenPlan) {
                if (chosenPlan === 'Teams') {
                    this.category = 'teamPlans';
                }
            }
        }
    }
</script>