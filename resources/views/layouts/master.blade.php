<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paperus Custom Packaging</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.png">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/script.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="asset/logo.png" height="30px" width="60px">
                </div>
                <div class="sidebar-brand-text mx-2">Paperus ID</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-sitemap"></i>
                    <span>Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master:</h6>
                        <a class="collapse-item" href="{{ url('masterpegawai') }}">Master Pegawai</a>
                        <a class="collapse-item" href="{{ url('mastercustomer') }}">Master Customer</a>
                        <a class="collapse-item" href="{{ url('mastersupplier') }}">Master Supplier</a>
                        <a class="collapse-item" href="{{ url('masterbox') }}">Master Box</a>
                        <a class="collapse-item" href="{{ url('mastervendor') }}">Master Vendor</a>
                        <a class="collapse-item" href="{{ url('masterrole') }}">Permission Role</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-wpforms"></i>
                    <span>Item</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Form:</h6>
                        <a class="collapse-item" href="{{ url('stokbarang') }}">Stok Barang</a>
                        <a class="collapse-item" href="{{ url('pembelianbarang') }}">Pembelian Barang</a>
                        <a class="collapse-item" href="{{ url('arusbarang') }}">Masuk/Keluar Barang</a>
                        <a class="collapse-item" href="{{ url('stokbarangjadi') }}">Stok Barang Jadi</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprocess"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-wpforms"></i>
                    <span>Processing</span>
                </a>
                <div id="collapseprocess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Form:</h6>
                        <a class="collapse-item" href="{{ url('masterpenawaran') }}">Form Penawaran</a>
                        <a class="collapse-item" href="{{ url('formdp') }}">Form DP/Pembayaran</a>
                        <a class="collapse-item" href="{{ url('formdesain') }}">Form Desain, Pisau, Plat</a>
                        <a class="collapse-item" href="{{ url('suratperintahkerja') }}">Surat Perintah Kerja</a>
                        <a class="collapse-item" href="{{ url('suratjalan') }}">Pengiriman Barang</a>
                        <a class="collapse-item" href="{{ url('penagihan') }}">Penagihan/Invoicing</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselaporan"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-wpforms"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapselaporan" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Form:</h6>
                        <a class="collapse-item" href="{{ url('laporanlogin') }}">Laporan Login</a>
                        <a class="collapse-item" href="{{ url('laporantransaksi') }}">Laporan Transaksi</a>
                        <a class="collapse-item" href="{{ url('laporankeuangan') }}">Laporan Keuangan</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <form action="{{ url('/logout') }}">
                    <button class="nav-link"  style="height:100%;width: 100%;background-color: transparent;border:none;color:white;">
                        <i class="fas fa-fw fa-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>

            <!--<li class="nav-item">
                <a class="nav-link" href="{{ url('kartustok') }}">
                    <i class="fas fa-layer-group"></i>
                    <span>Kartu Stok</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('history') }}">
                    <i class="fas fa-history"></i>
                    <span>History Barang Selesai</span>
                </a>
            </li>-->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</body>

</html>
