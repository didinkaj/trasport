<script>
    export default {
        data() {
            return {
                name: '',
                email: '',
                errors: [],
            }
        },
        methods: {
            registerDriver() {

                if(this.name == '' || this.email == ''){
                    if(this.name == ''){
                        this.errors.push('  Name required.');
                    }
                    if(this.email == ''){
                        this.errors.push(' Email Address required.');
                    }


                }
            }
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
                    <router-link :to="{name:'Showvehicles_route'}">Drivers</router-link>
                </li>
                <li>
                    <span class="show-for-sr">Current: </span> Add Driver
                </li>
            </ul>
        </nav>
        <form class="auth-form">
            <div v-if="errors.length" class="error text-center">
                <b>Please correct the following error(s):</b>
                <div>
                    <div v-for="error in errors">{{ error }}</div>
                </div>
            </div>
            <div class="name">
                <label for="email">Name</label>
                <input id="name" type="text" class="form-control" name="name" v-model="name" value=""
                       aria-describedby="nameHelpText" required autofocus>
            </div>
            <div class="email">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" name="email" v-model="email" aria-describedby="emailHelpText" required>
            </div>
            <div class="row">
                <div class="column small-12  medium-6 button-plus-link">
                </div>
                <div class="column small-12  medium-6 button-plus-link  ">
                    <button type="submit" class="button auth-button " @click.prevent="registerDriver()">
                        Add Driver
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<style>

</style>