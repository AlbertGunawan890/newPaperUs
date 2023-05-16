@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Vendor</h1>
        </div>

        <div class="card">
            <div class="card-header">
              <a href={{ url('tambahvendor') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                  </button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelMasterVendor" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Vendor</th>
                            <th>Nama Vendor</th>
                            <th>Jenis Item</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($arrVendor as $prm)
                        <tr>
                            <td>{{$prm->id_vendor}}</td>
                            <td>{{$prm->nama_vendor}}</td>
                            <td>{{$prm->jenis_item}}</td>
                            <td>{{$prm->kategori_vendor}}</td>
                            <td>{{$prm->alamat_vendor}}</td>
                            <td>
                               <div style="display: flex">
                                    <button style="margin-right: 5px;" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    <form method="post"
                                        action="{{ url('/mastervendor/delete/' . $prm->id_vendor) }}">
                                        @csrf
                                        <button style="margin-left: 5px;" type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
