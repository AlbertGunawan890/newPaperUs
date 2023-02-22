$(document).ready(function() {
    $('#tabelFormDesain').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "10%", "targets": 0 },
            { "width": "45%", "targets": 1 },
            { "width": "30%", "targets": 2 },
            { "width": "15%", "targets": 3 },
            {}
        ]
    });
});
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})