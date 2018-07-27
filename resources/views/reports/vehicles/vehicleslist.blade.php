<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Vehicles List</title>


    <style>


        table#content, th, td {
            border: 1px solid #DDDDDD;

        }

        table, td {
            cellspacing:0px;

        }

        table#content td, table th {
            padding: 5px;
        }

        table#content {
            border-collapse: collapse;
            font-size: 14px;
            font-color: #660000;
            cell-spacing:0px;
        }

        body {

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            margin: 10px;
        }

        p {
            page-break-after: always;
        }

        .footer {
            position: fixed;
            bottom: 0px;
        }

        .pagenum:before {
            content: counter(page);
        }

        .page-break {
            page-break-after: always;
        }

    </style>
</head>

<body width="">
<h4>Transport Management</h4>
<h5> Vehicles</h5>

<table style="border:none;margin-bottom:8px; width:100%;cellspacing: 0px" id="content">
    <thead style="background:#F5F5F5;">
    <tr>
        <th>Name</th>
        <th>Capacity</th>
        <th>Number Plate</th>
    </tr>
    </thead>
    <tbody>
    @isset($vehicles)
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ucwords($vehicle->name)}}</td>
                <td>{{$vehicle->capacity}}</td>
                <td>{{ucwords($vehicle->no_plate)}}</td>
            </tr>
        @endforeach
    @endisset
    </tbody>
</table>




</body>
</html>