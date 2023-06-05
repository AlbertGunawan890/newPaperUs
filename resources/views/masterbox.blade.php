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
                                        <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Edit Box
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="label" for="readonlyTextInput">Tipe Box</label>
                                                        <input id="readonlyTextInput" class="form-control" placeholder="Masukkan Tipe Box" name ="tipe_box">
                                            
                                                        <label class="label">Nama</label>
                                                        <input class="form-control" placeholder="Masukkan Nama Box"name ="namabox">
                                            
                                                        <label class="label">Panjang</label>
                                                        <input class="form-control" placeholder="Panjang (cm)"name ="panjang">
                                            
                                                        <label class="label">Lebar</label>
                                                        <input class="form-control" placeholder="Lebar (cm)"name ="lebar">
                                            
                                                        <label class="label">Tinggi</label>
                                                        <input class="form-control" placeholder="Tinggi (cm)"name ="tinggi">
                                            
                                                        <label class="label">Keterangan</label>
                                                        <textarea class="form-control" aria-label="With textarea"name ="keterangan"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
