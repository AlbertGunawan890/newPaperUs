@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Surat Jalan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpengiriman') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                      </button>
                    </a>
            </div>
            <div class="card-body">
            <table id="tabelSuratJalan" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. SPK</th>
                        <th>No. Surat Jalan</th>
                        <th>Qty</th>
                        <th>Nama Penerima</th>
                        <th>Alamat Penerima</th>
                        <th>Penerimaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1010</td>
                        <td>001</td>
                        <td>2</td>
                        <td>Andi</td>
                        <td>Manado</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1011</td>
                        <td>002</td>
                        <td>10</td>
                        <td>Fenny</td>
                        <td>Surabaya</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection