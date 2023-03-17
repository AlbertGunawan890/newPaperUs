@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Keuangan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href="#">
                    <button type="button" class="btn btn-primary my-auto">Import</button>
                    <button type="button" class="btn btn-primary my-auto">Export</button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelKeuangan" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Uang Masuk</th>
                            <th>Uang Keluar</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>18 Maret 2023</td>
                            <td>Saldo Awal</td>
                            <td>Rp1.000.000</td>
                            <td>0</td>
                            <td>Rp1.000.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>17 Maret 2023</td>
                            <td>Bayar Listrik</td>
                            <td></td>
                            <td>Rp200.000</td>
                            <td>Rp800.000</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection