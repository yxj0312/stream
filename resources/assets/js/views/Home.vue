<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses" :key="status.id">
                    <div class="message-header">
                        <p>
                            {{ status.user.name }} said...
                        </p>

                        <p>
                            <!-- {{ postedOn(status) }} -->
                            <!-- use Vue Filter instead -->
                            {{ status.created_at | ago | capitalize }}
                        </p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>
                </div>

                <!-- add to stream form -->
                <add-to-stream @completed="addStatus"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/Status';
    import AddToStream from '../components/AddToStream.vue';

    export default {
        components: { AddToStream },

        data() {
            return {
                statuses: []
            }
        },

        filters: {
            ago(date) {
                return moment(date).fromNow();
            },

            capitalize(value) {
                return value.toUpperCase();
            }
        },

        created() {
            // fire off an ajax
            Status.all(statuses => this.statuses = statuses);
                // .then(({data}) => this.statuses = data);
        },

        methods: {
            postedOn(status) {
                return moment(status.created_at).fromNow();
            },

            addStatus(status) {
                this.statuses.unshift(status); 

                alert('You statuts has been added to the stream.');

                window.scrollTo(0, 0);
            }
        }
    }
</script>
