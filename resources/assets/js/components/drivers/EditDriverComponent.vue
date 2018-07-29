<script>
    export default {
        data() {
            return {
                form:{
                    name: '',
                    email: '',
                    phone:''
                },
                errors: [],
            }
        },
        methods: {
            registerDriver() {

                if (this.form.name == '' || this.form.email == '' || this.form.phone == '') {
                    if (this.name == '') {
                        this.errors.push('  Name required.');
                    }
                    if (this.form.email == '') {
                        this.errors.push(' Email Address required.');
                    }
                    if (this.form.phone == '') {
                        this.errors.push(' Phone Number required.');
                    }
                } else {
                    this.errors = []
                    let input = this.form
                    this.$store.dispatch('addDriver', input).then(() => {
                            this.success('Driver added successfully')
                            this.newVehicle = {}
                            this.errors = []
                            this.$router.push({name: 'Showdrivers_route'})
                        },
                        error => {
                            this.error('Driver not added')

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
                    <span class="show-for-sr">Current: </span> Edit Driver
                </li>
            </ul>
        </nav>
        <form class="auth-form">
            <h5 class="text-center">Edit Driver</h5>
            <div v-if="errors.length" class="error text-center">
                <b>Please correct the following error(s):</b>
                <div>
                    <div v-for="error in errors">{{ error }}</div>
                </div>
            </div>
            <div class="name">
                <label for="email">Name</label>
                <input id="name" type="text" class="form-control" name="name" v-model="form.name" value=""
                       aria-describedby="nameHelpText" required autofocus>
            </div>
            <div class="phone">
                <label for="phone">Phone Number</label>
                <input id="phone" type="number" name="phone" v-model="form.phone" aria-describedby="emailHelpText" required>
            </div>
            <div class="email">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" name="email" v-model="form.email" aria-describedby="emailHelpText" required>
            </div>
            <div class="row">
                <div class="column small-12  medium-6 button-plus-link">
                </div>
                <div class="column small-12  medium-6 button-plus-link  ">
                    <button type="submit" class="button auth-button " @click.prevent="registerDriver()">
                        Edit Driver
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<style>

</style>