@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Stok Barang</h1>
    </div>

    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pisau-tab" data-toggle="tab" href="#pisau" role="tab" aria-controls="home"
                aria-selected="true">Pisau</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="plat-tab" data-toggle="tab" href="#plat" role="tab" aria-controls="profile"
                aria-selected="false">Plat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="sisa-tab" data-toggle="tab" href="#sisa" role="tab" aria-controls="profile"
                aria-selected="false">Kertas Sisa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="lain-tab" data-toggle="tab" href="#lain" role="tab" aria-controls="profile"
                aria-selected="false">Barang lain-lain</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" name="Pisau" id="pisau" role="tabpanel" aria-labelledby="pisau-tab">
            <div class="card-body">
                
                    <table id="tabelStokBarangA" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Lokasi Barang</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ctr=1; ?>
                            @foreach ($arrStokpisau as $prm)
                            <tr>
                                <td>{{ $ctr }}</td>
                                <td>{{ $prm->jenisbarang }}</td>
                                <td>{{ $prm->hargasatuan }}</td>
                                <td>{{ $prm->jumlahmasuk }}</td>
                                <td>{{ $prm->lokasibarang }}</td>
                                <td>{{ $prm->tanggalmasuk }}</td>
                            </tr>
                            <?php $ctr++; ?>
                            @endforeach
                        </tbody>
                    </table>
                
            </div>
        </div>
        <div class="tab-pane fade" id="plat" role="tabpanel" aria-labelledby="plat-tab">
            <div class="card-body">
                
                    <table id="tabelStokBarangB" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Lokasi Barang</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $ctr=1; ?>
                            @foreach ($arrStokplat as $prm)
                            <tr>
                                <td>{{ $ctr }}</td>
                                <td>{{ $prm->jenisbarang }}</td>
                                <td>{{ $prm->hargasatuan }}</td>
                                <td>{{ $prm->jumlahmasuk }}</td>
                                <td>{{ $prm->lokasibarang }}</td>
                                <td>{{ $prm->tanggalmasuk }}</td>
                            </tr>
                            <?php $ctr++; ?>
                            @endforeach
                        </tbody>
                    </table>
                
            </div>
        </div>
        <div class="tab-pane fade" id="sisa" role="tabpanel" aria-labelledby="sisa-tab">
            <div class="card-body">
                <table id="tabelStokBarangC" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Lokasi Barang</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $ctr=1; ?>
                        @foreach ($arrStokkertassisa as $prm)
                        <tr>
                            <td>{{ $ctr }}</td>
                            <td>{{ $prm->jenisbarang }}</td>
                            <td>{{ $prm->hargasatuan }}</td>
                            <td>{{ $prm->jumlahmasuk }}</td>
                            <td>{{ $prm->lokasibarang }}</td>
                            <td>{{ $prm->tanggalmasuk }}</td>
                        </tr>
                        <?php $ctr++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="lain" role="tabpanel" aria-labelledby="lain-tab">
            <div class="card-body">
                <table id="tabelStokBarangD" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Lokasi Barang</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $ctr=1; ?>
                        @foreach ($arrStokbaranglain as $prm)
                        <tr>
                            <td>{{ $ctr }}</td>
                            <td>{{ $prm->jenisbarang }}</td>
                            <td>{{ $prm->hargasatuan }}</td>
                            <td>{{ $prm->jumlahmasuk }}</td>
                            <td>{{ $prm->lokasibarang }}</td>
                            <td>{{ $prm->tanggalmasuk }}</td>
                        </tr>
                        <?php $ctr++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection
