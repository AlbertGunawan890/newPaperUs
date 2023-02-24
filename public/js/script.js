$(document).ready(function() {
    $('#tabelMasterPegawai').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "10%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            {}
        ]
    });
});
$(document).ready(function() {
    $('#tabelMasterCustomer').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "10%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            {}
        ]
    });
});
$(document).ready(function() {
    $('#tabelMasterSupplier').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "10%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            {}
        ]
    });
});
$(document).ready(function() {
    $('#tabelStokBarangA').DataTable({});
});
$(document).ready(function() {
    $('#tabelStokBarangB').DataTable({});
});
$(document).ready(function() {
    $('#tabelPembelianBarang').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "10%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "15%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "5%", "targets": 5 },
            { "width": "10%", "targets": 6 },
            { "width": "10%", "targets": 7 },
            {}
        ]
    });
});
$(document).ready(function() {
    $('#tabelBarangMasuk').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "30%", "targets": 0 },
            { "width": "30%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            {}
        ]
    });
});
$(document).ready(function() {
    $('#tabelBarangKeluar').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "30%", "targets": 0 },
            { "width": "30%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "10%", "targets": 3 }
        ]
    });
});
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})