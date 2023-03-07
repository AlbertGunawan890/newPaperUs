@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penagihan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpenagihan') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                      </button>
                    </a>
            </div>
            <div class="card-body">
            <table id="tabelPenagihan" class="table table-bordered table-no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Penawaran</th>
                        <th>Customer</th>
                        <th>Jenis Box</th>
                        <th>Jumlah</th>
                        <th>Nominal</th>
                        <th>Sisa Hutang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12321312</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>300000</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>12321312</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>400000</td>
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