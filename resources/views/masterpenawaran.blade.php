@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penawaran</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpenawaran') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                      </button>
                    </a>
                  
            </div>
            <div class="card-body">
                <table id="tabelFormPenawaran" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No. Penawaran</th>
                            <th>Nama Customer</th>
                            <th>Jenis Box</th>
                            <th>Quantity</th>
                            <th>Jumlah Produksi</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Nett</th>
                            <th>Penerimaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123456</td>
                            <td>Bambang bambang</td>
                            <td>10x10cm</td>
                            <td>10000</td>
                            <td>3000</td>
                            <td>Rp10.000</td>
                            <td>5%</td>
                            <td>Rp95.000</td>
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
                            <td>123456</td>
                            <td>Andi Wijaya</td>
                            <td>20x10cm</td>
                            <td>3000</td>
                            <td>1000</td>
                            <td>Rp5.000</td>
                            <td>20%</td>
                            <td>Rp4.000</td>
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

    </div>
    <!-- /.container-fluid -->
    @endsection