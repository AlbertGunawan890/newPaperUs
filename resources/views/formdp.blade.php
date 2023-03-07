@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form DP / Pembayaran</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahdp') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                      </button>
                    </a>
                  
                 
            </div>
            <div class="card-body">
            <table id="tabelFormDP" class="table table-bordered table-no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Penawaran</th>
                        <th>Nama Customer</th>
                        <th>Pembayaran</th>
                        <th>Sisa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234</td>
                        <td>Pak Bambang</td>
                        <td>Rp300.000</td>
                        <td>Rp.450.000</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2345</td>
                        <td>Sugiono</td>
                        <td>Rp500.000</td>
                        <td>Rp300.000</td>
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