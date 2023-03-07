@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Box</h1>
        </div>

        <div class="card">
            <div class="card-header">
              <a href={{ url('tambahbox') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                  </button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelMasterCustomer" class="table table-bordered table-no-wrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tipe Box</th>
                            <th>Nama</th>
                            <th>Panjang</th>
                            <th>Lebar</th>
                            <th>Tinggi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12321312</td>
                            <td>ABCDEFGH</td>
                            <td>10</td>
                            <td>20</td>
                            <td>20</td>
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