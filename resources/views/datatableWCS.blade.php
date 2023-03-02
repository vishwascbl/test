<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    
</head>
<body>
    
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function() {
    $('#example').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            "url": "{{ route('get-datatable-vendors-home') }}",
            dataSrc: 'data'
            // beforeSend: function() {
            //     $(".loader_box").show();
            // },
            // complete: function() {
            //     $(".loader_box").hide();
            // }
        },
        'columns': [
            { data: 'id' },
            { data: 'name' },
            { data: 'slug' },
            { data: 'address' },
            { data: 'email' },
            { data: 'phone_no' },
            { data: 'status' }
        ]
    });
} );
</script>
</html>
