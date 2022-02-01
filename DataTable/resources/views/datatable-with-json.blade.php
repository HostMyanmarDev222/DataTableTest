<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
    <title>Document</title>
</head>
<body>
<table id="table_json" class="display">
    <thead>
        <tr>
            <th>userId</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>phoneNumber</th>
            <th>emailAddress</th>
        </tr>
    </thead>
</table>
</body>
</html>