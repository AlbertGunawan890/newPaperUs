@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Customer</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahcustomer') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelMasterCustomer" class="table table-bordered table-no-wrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Customer</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arrCustomer as $prm)
                            <tr>
                                <td>{{ $prm->id_customer }}</td>
                                <td>{{ $prm->nama_customer }}</td>
                                <td>{{ $prm->alamat_customer }}</td>
                                <td>{{ $prm->notelp_customer }}</td>
                                <td>{{ $prm->email_customer }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
