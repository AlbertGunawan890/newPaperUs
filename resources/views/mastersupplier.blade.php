@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Supplier</h1>
        </div>

        <div class="card">
            <div class="card-header">
              <a href={{ url('tambahsupplier') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                  </button>
                </a>
            </div>
            <div class="card-body">
            <table id="tabelMasterSupplier" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Supplier</th>
                        <th>Nama</th>
                        <th>Item</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12321312</td>
                        <td>PT. ABC</td>
                        <td>Kertas</td>
                        <td>Jl. Darmo Indah X</td>
                        <td>08123456678</td>
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