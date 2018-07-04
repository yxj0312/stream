<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">The Contact Page</div>

                    <div class="card-body">
                        I'm an example component.
                        <example :items="['one','two','three']">
                            <!-- "props" is just a temporary variable(u can also call it data if u want) -->
                            <template  slot="menu-item" slot-scope="props">
                            <!-- U can also do like:
                            <template slot-scope="{ bar }">
                                <h2 v-text="bar"></h2> -->
                                <div>
                                    <em v-text="props.item"></em>
                                </div>
                            </template>
                        </example>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import example from "./Example.vue";
    export default {
        components: { example }
    }
</script>
