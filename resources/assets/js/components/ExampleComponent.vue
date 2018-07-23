<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <el-row>
                            <el-col :span="12">
                                I'm an example component.
                                <el-time-select
                                        v-model="value1"
                                        :picker-options="{
    start: '08:30',
    step: '00:15',
    end: '18:30'
  }"
                                        placeholder="Select time">
                                </el-time-select>


                            </el-col>
                        </el-row>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ElRow from "element-ui/packages/row/src/row";
    import ElCol from "element-ui/packages/col/src/col";

    export default {
        components: {
            ElCol,
            ElRow
        },
        data(){
            return{
                value1: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
