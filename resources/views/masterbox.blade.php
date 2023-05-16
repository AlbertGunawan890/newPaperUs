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

                <table id="tabelMasterBox" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
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
                        @foreach ($arrBox as $prm)
                        <tr>

                            <td>{{$prm->tipe_box}}</td>
                            <td>{{$prm->nama_box}}</td>
                            <td>{{$prm->panjang_box}}</td>
                            <td>{{$prm->lebar_box}}</td>
                            <td>{{$prm->tinggi_box}}</td>
                            <td>
                                <div style="display: flex;">
                                    <form action="">
                                        @csrf
                                        <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form  action="{{ url('masterbox/delete/' . $prm->id_box) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
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
