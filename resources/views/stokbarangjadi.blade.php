@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Stok Barang Jadi</h1>
        </div>

        <div class="card">
            <div class="card-body">
            <table id="tabelStokBarangJadi" class="table table-bordered table-no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Quantity</th>
                        <th>Lokasi Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>B7FD-8E</td>
                        <td>Box 10x10cm</td>
                        <td>Rp5000</td>
                        <td>250</td>
                        <td>A-9</td>
                        <td>27-02-2023</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>B8FD-1E</td>
                        <td>Box 20x10cm</td>
                        <td>Rp7000</td>
                        <td>250</td>
                        <td>A-8</td>
                        <td>26-02-2023</td>
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