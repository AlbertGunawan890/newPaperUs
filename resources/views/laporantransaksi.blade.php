@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Transaksi</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Import</button>
                    <button type="button" class="btn btn-primary">Export</button>
                </div>
            </div>
            <div class="card-body">
                <table id="tabelTransaksi" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tgl. Transaksi</th>
                            <th>No. Penawaran</th>
                            <th>Nama Customer</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>17 Maret 2023</td>
                            <td>2032</td>
                            <td>Andin</td>
                            <td>Rp300.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection