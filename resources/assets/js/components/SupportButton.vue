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
            <header class="card-header">
                <h1 class="card-header-title">
                    Hava a Question?
                </h1>
            </header>
            <form autocomplete="off"
                  @submit.prevent="contactSupport"
                  @keydown="submitted = false"
                >
                <div class="card-content">
                    <div class="field">
                        <div class="control">
                            <input
                                type="text"
                                name ="name"
                                id="name"
                                class="input"
                                placeholder="What's your name?"
                                v-model="message.name"
                                @keydown="delete errors.name"
                                required
                            >
                            <span v-text="errors.name[0]"
                            v-if="errors.name"></span>
                        </div>
                    </div>

                    <div class="field">
                    
                        <div class="control">
                            <input
                                class="input"
                                type="email" 
                                name="email"
                                id="email"
                                placeholder="Which email address should we repsond to?"
                                v-model="message.email"
                                @keydown="delete errors.email"
                                required
                            >
                            <span v-text="errors.email [0]"
                            v-if="errors.email "></span>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <textarea 
                                class="textarea"
                                name="question"
                                id="body"
                                data-autosize
                                required
                                rows="10"
                                placeholder="What's your question"
                                @keydown="delete errors.question"
                                v-model="message.question"></textarea>
                            <span v-text="errors.question[0]"
                            v-if="errors.question"></span>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <input 
                                type="text"
                                name="verification"
                                id="verification"
                                class="input"
                                placeholder="What is 1 + 4?"
                                v-model="message.verification"
                                @keydown="delete errors.verification"
                                required>
                            <span v-text="errors.verification[0]"
                            v-if="errors.verification"></span>   
                        </div>
                    </div>
                        
                        
                </div>
                <footer class="card-footer">
                    <button type="button" @click="cancel" class="card-footer-item button is-dark">Cancel</button>
                    <button type="submit" class="card-footer-item button is-primary" :disabled="submitted">Send</button>
                </footer>
            </form>
        </modal>
    </div>
</template>

<script>
    export default {
        props: [],

        components: {},

        data() {
            return {
                message: {},
                errors: {},
                submitted: false
            }
        },

        computed: {
            
        },

        methods: {
            cancel() {
                this.$modal.hide('contact-support-modal');

                this.resetForm();
            },

            contactSupport() {
               this.submitted = true;

               axios
                    .post('/contact',this.message)
                        .then(() => {
                            this.$modal.hide('contact-support-modal');

                            this.resetForm();

                            // show an alert swal()
                        })
                        .catch(errors => {
                            this.errors = errors.response.data.errors;
                        })
            },

            resetForm() {
                this.message = {};
                this.submitted = false;
            }
        }
    }
</script>