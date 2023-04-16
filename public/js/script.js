$(document).ready(function() {
    $('#tabelMasterPegawai').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "20%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelMasterCustomer').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
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
            { "width": "5%", "targets": 0 },
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
    $('#tabelMasterBox').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
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
    $('#tabelStokBarangA').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "20%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelStokBarangB').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { name: 'desktop', width: Infinity },
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "15%", "targets": 4 },
            { "width": "20%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelStokBarangC').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "20%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelStokBarangD').DataTable({
        "autoWidth": false,
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "20%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelPembelianBarang').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
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
            { "width": "5%", "targets": 0 },
            { "width": "30%", "targets": 1 },
            { "width": "10%", "targets": 2 },
            { "width": "15%", "targets": 3 },
            { "width": "15%", "targets": 4 },
            { "width": "10%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelBarangKeluar').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "30%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "10%", "targets": 3 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelSuratJalan').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "targets": -2, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "5%", "targets": 1 },
            { "width": "5%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            { "width": "10%", "targets": 6 },
            { "width": "10%", "targets": 7 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelFormDesain').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "35%", "targets": 1 },
            { "width": "35%", "targets": 2 },
            { "width": "10%", "targets": 3 },
        ]
    });
});
$(document).ready(function() {
    $('#tabelFormDP').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "targets": -2, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "10%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelPenagihan').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "targets": -2, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "15%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            { "width": "10%", "targets": 6 },
            { "width": "10%", "targets": 7 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelFormPenawaran').DataTable({
        responsive: true,
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "targets": -2, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "10%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            { "width": "5%", "targets": 6 },
            { "width": "5%", "targets": 7 },
            { "width": "10%", "targets": 8 },
            { "width": "10%", "targets": 9 }

        ]
    });
});
$(document).ready(function() {
    $('#tabelProses').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "targets": -2, "className": 'dt-center' },
            { "width": "2%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "5%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            { "width": "5%", "targets": 6 },
            { "width": "10%", "targets": 7 },
            { "width": "10%", "targets": 8 },
            { "width": "10%", "targets": 9 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelMasterVendor').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "20%", "targets": 5 }
        ]
    });
});
$(document).ready(function() {
    $('#tabelStokBarangJadi').DataTable({
        "columnDefs": [
            { "targets": -1, "className": 'dt-center' },
            { "width": "5%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "15%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "10%", "targets": 4 },
            { "width": "10%", "targets": 5 },
            { "width": "10%", "targets": 6 },
            { "width": "10%", "targets": 7 },
        ]
    });
});
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
$(document).ready(function() {
    $('.my-select').selectpicker();
});
$(document).ready(function() {
    $('#tabelLogin').DataTable({
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "10%", "targets": 2 },
            { "width": "10%", "targets": 3 },
            { "width": "20%", "targets": 4 },
        ]
    });
});
$(document).ready(function() {
    $('#tabelTransaksi').DataTable({
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
        ]
    });
});
$(document).ready(function() {
    $('#tabelKeuangan').DataTable({
        responsive: true,
        "columnDefs": [
            { "width": "5%", "targets": 0 },
            { "width": "15%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "20%", "targets": 4 },
            { "width": "20%", "targets": 4 },
        ]
    });
});