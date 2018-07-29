<script>
    export default {
        data(){
            return{

            }
        },
        created(){
            this.$Progress.start(40)
        }
    }
</script>

<template>
    <div>
        <div class="dash-title text-center">
            <h5 class="separator-left">Report Section</h5>
        </div>

        <div class="grid-x">

        <div class="card cell medium-5">
            <div class="card-section">
                <p><a href="/drivers/list/pdf" target="_blank" style="color: #2f4b26">
                    Download  Drivers List
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a></p>
            </div>
        </div>
        <div class="card medium-5 cell medium-offset-1">
            <div class="card-section">
                <p><a href="/drivers/list/pdf" target="_blank" style="color: #2f4b26">
                    Download  Vehicles List
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a></p>
            </div>
        </div>
        </div>
    </div>
</template>

<style>

</style>