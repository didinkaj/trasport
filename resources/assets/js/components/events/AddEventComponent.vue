<script>
    export default {
        data() {
            return {
                errors: [],
                hasError: true,
                newEvent: {
                    'name': '',
                    'description': ''
                },
            }
        },
        methods: {
            createItem() {
                let input = this.newEvent;
                if (input['name'] == '' || input['description'] == '') {
                    this.errors = [];

                    if (!this.newEvent.name) {
                        this.errors.push('Event name required.');
                    }
                    if (!this.newEvent.description) {
                        this.errors.push('Event Description required.');

                    }

                    this.error('Event not added. Ensure all fields are filled')
                } else {
                    this.$store.dispatch('addEvent', input).then(() => {
                            this.success('Event added successfully')
                            this.newEvent = {}
                            this.errors = []
                            this.$router.push({name: 'ShowEvents_route'})
                        },
                        error => {
                            this.error('Event not added')

                        })
                }
            },
            success(messageToEcho) {
                this.$notify({
                    title: 'Success',
                    message: messageToEcho,
                    type: 'success'
                });
            },
            error(messageToEcho) {
                this.$notify({
                    title: 'Error',
                    message: messageToEcho,
                    type: 'error'
                });
            }

        },
        filters:{
            capitalize:  (value) => {
                if (!value) return ''
                value = value.toString()
                return value.charAt(0).toUpperCase() + value.slice(1)
            }
        },
        created(){
            this.$Progress.start(40)
        }
    }

</script>

<template>
    <div>
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><router-link :to="{name:'ShowEvents_route'}">Events</router-link></li>
                <li>
                    <span class="show-for-sr">Current: </span> Add Event
                </li>
            </ul>
        </nav>
        <form class="form-container">
                <h5 class="text-center">Create New Event</h5>
            <div class="form-group">
                <div v-if="errors.length" class="error text-center">
                    <b>Please correct the following error(s):</b>
                    <div>
                        <div v-for="error in errors">{{ error }}</div>
                    </div>
                </div>
                <label for="name">Event Name:</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="20"
                       required="required" v-model="newEvent.name">
            </div>
            <div class="form-group">
                <label for="no_plate">Description:</label>
                <textarea rows="5"type="text" class="form-control" id="no_plate" name="no_plate"
                          required="required" v-model="newEvent.description"></textarea>
            </div>

            <button class=" button auth-button right" @click.prevent="createItem()">
                <span class="fa fa-plus"></span> Add Event
            </button>
        </form>
    </div>

</template>

<style>
    .error {
        color: red;
    }
</style>