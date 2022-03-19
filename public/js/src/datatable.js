$(document).ready( function () {
    $('#myTable').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: '/users',
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'last_name' },
            { data: 'email' },
            { data: 'address' },
            { data: 'cell_phone' },
            { data: 'created_at' },
            { data: 'updated_at' },
        ],
    });
} );
