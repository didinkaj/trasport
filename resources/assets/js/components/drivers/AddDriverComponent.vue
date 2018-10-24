<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    phone: ''
                },
                errors: [],
                disabled:false
            }
        },
        methods: {
            registerDriver() {

                if (!this.form.name || !this.form.email || !this.form.phone) {
                    if (!this.name) {
                        this.errors.push('  Name required.');
                    }
                    if (!this.form.email) {
                        this.errors.push(' Email Address required.');
                    }
                    if (!this.form.phone) {
                        this.errors.push(' Phone Number required.');
                    }
                } else {
                    this.errors = []
                    let input = this.form
                    this.$Progress.start()
                    this.disabled = true;
                    this.$store.dispatch('addDriver', input).then((response) => {
                        this.successNotify('Driver added successfully')
                        this.newVehicle = {}
                        this.errors = []
                        this.$router.push({name: 'Showdrivers_route'});
                        this.$Progress.finish()
                    }).catch((error) => {
                        this.disabled = false;
                        this.$Progress.finish();
//                        this.errors.push(error.data.errors);
                        this.errors.push(Object.values(error.data.errors).toString());
//                        this.errorNotify(Object.values(error.data.errors).join(','));
                    })
                }
            },
            successNotify(messageToEcho) {
                this.$notify({
                    title: 'Success',
                    message: messageToEcho,
                    type: 'success'
                });
            },
            errorNotify(messageToEcho) {
                this.$notify({
                    title: 'Error',
                    message: messageToEcho,
                    type: 'error'
                });
            },
        },
        created() {
            this.$Progress.start(40)
        }
    }
</script>

<template>
    <div>
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li>
                    <router-link :to="{name:'dashboard_route'}">Home</router-link>
                </li>
                <li>
                    <router-link :to="{name:'Showdrivers_route'}">Drivers</router-link>
                </li>
                <li>
                    <span class="show-for-sr">Current: </span> Add Driver
                </li>
            </ul>
        </nav>
        <form class="auth-form" @submit.prevent="registerDriver()">
            <h5 class="text-center">Create New Driver</h5>
            <div v-if="errors.length" class="callout alert" data-closable>
                <b>Please correct the following error(s):</b>
                <div>
                    {{errors.toString()}}
                </div>
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="name">
                <label for="email">Name</label>
                <input id="name" type="text" class="form-control" name="name" v-model="form.name" value=""
                       aria-describedby="nameHelpText" required="required" autofocus>
            </div>
            <div class="phone">
                <label for="phone">Phone Number</label>
                <input id="phone" type="number" name="phone" v-model="form.phone" aria-describedby="emailHelpText"
                       required="required">
            </div>
            <div class="email">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" name="email" v-model="form.email" aria-describedby="emailHelpText"
                       required="required">
            </div>
            <div class="row">
                <div class="column small-12  medium-6 button-plus-link">
                </div>
                <div class="column small-12  medium-6 button-plus-link">
                    <div class="loading-button">
                        <button type="submit" class="primary button auth-button" data-loading-start v-show="!disabled" >
                            Register Driver
                        </button>
                        <button type="button" class="primary button show auth-button" data-loading-end v-show="disabled" >
                            <i class='fa fa-spinner fa-spin'></i> Registering Driver
                        </button>
                    </div> <!-- refresh -->
                    <div data-success-message class="callout success hide">
                        Thanks, your order has been processed!
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<style>

</style>