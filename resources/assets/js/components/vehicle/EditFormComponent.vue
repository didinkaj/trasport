<script>
    export default {
        props:[
            'dialogFormVisible'
        ],
        data(){
            return{
                centerDialogVisible: false,
                dialogTableVisible: false,
                form: {
                    name: '',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    type: [],
                    resource: '',
                    desc: ''
                },
                formLabelWidth: '120px'

            }
        }
    }

</script>

<template>
    <div>
        <el-dialog title="Shipping address" :visible.sync="dialogFormVisible" center>
            <el-form :model="form">
                <el-form-item label="Name" :label-width="formLabelWidth">
                    <el-input v-model="form.name" auto-complete="off"></el-input>
                </el-form-item>

            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="dialogFormVisible = false">Confirm</el-button>
              </span>
        </el-dialog>

    </div>

</template>