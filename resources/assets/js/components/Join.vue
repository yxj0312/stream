<template>
    <div slot="" class="mb-6">
        <plan-cards
            v-if="showPlans"
            :initial-category="category"
            plan-classes="mt-8"
            @change-category="category = $event"
        >
            <template v-slot:heading="{category}">
                <div slot="heading" class="mb-8">
                    <h1 class="text-3xl font-light tracking-tight mb-8 ">
                        {{ category === 'personalPlans' ? "Let's Get You Signed Up" : "Knowledge Grows in Numbers" }}
                    </h1>
                </div>
            </template>

            <template v-slot:plans-after="{ category }">
                <div slot="plans-after" class="py-4">
                    
               </div>
            </template>
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