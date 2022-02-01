$(document).ready( function () {
    $('#table_id').DataTable();

    $('#table_json').DataTable({
        ajax: {
            url:'./jsonfile/user.json',
            dataSrc: 'users'},
        columns:[
            {data:'userId'},
            {data:'firstName'},
            {data:'lastName'},
            {data:'phoneNumber'},
            {data:'emailAddress'},
        ]
    });
} );