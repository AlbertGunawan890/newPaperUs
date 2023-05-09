$(document).ready(function() {
    $('#tabelMasterPegawai').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "20%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            {}
        ]
    });
});
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
