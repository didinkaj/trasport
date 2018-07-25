<div class="table table-borderless" id="table">
    <table class="table table-borderless" id="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Profession</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tr v-for="item in items">
            <td>@{{ item.id }}</td>
            <td>@{{ item.name }}</td>
            <td>@{{ item.age }}</td>
            <td>@{{ item.profession }}</td>
            <td id="show-modal" @click="showModal=true; setVal(item.id, item.name, item.age, item.profession)"
                class="btn btn-info"><span
                    class="glyphicon glyphicon-pencil"></span></td>
            <td @click.prevent="deleteItem(item)" class="btn btn-danger"><span
                    class="glyphicon glyphicon-trash"></span></td>
        </tr>
    </table>
</div>