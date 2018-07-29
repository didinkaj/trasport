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
        <div class="grid-x page-header">
            <div class="cell medium-3">

            </div>
            <div class="cell medium-9">
                <div class="row">
                    <div class="dash-title text-center column">
                        <h5>Reports</h5>
                    </div>
                    <div class=" dash-title text-center column">

                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x">

        <div class="card cell medium-5">
            <div class="card-section">
                <p><a href="#" target="_blank" style="color: #2f4b26">
                      Van Reservation Histrory Download PDF
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a></p>
            </div>
        </div>
        <div class="card medium-5 cell medium-offset-1">
            <div class="card-section">
                <p><a href="#" target="_blank" style="color: #2f4b26">
                      Seat Reservation History Download PDF
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a></p>
            </div>
        </div>
        </div>

        <div class="grid-x">

            <div class="card cell medium-5">
                <div class="card-section">
                    <p><a href="#" target="_blank" style="color: #2f4b26">
                          My Events List Download PDF
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </a></p>
                </div>
            </div>

        </div>
    </div>
</template>

<style>

</style>