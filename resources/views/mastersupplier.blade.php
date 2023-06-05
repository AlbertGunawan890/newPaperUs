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
                <table id="tabelMasterSupplier" class="table table-bordered table-no-wrap table-responsive"
                    style="width:100%">
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
                        @foreach ($arrSupplier as $prm)
                        <tr>

                            <td>{{$prm->id_supplier}}</td>
                            <td>{{$prm->nama_supplier}}</td>
                            <td>{{$prm->item}}</td>
                            <td>{{$prm->alamat_supplier}}</td>
                            <td>{{$prm->notelp_supplier}}</td>
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
                                                    Edit Supplier
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="label">Nama Supplier</label>
                <input class="form-control" name="nama" placeholder="Masukkan Nama">

                <label class="label">NPWP</label>
                <input class="form-control" name="npwp" placeholder="Masukkan NPWP">

                <label class="label">Alamat</label>
                <input class="form-control" name="alamat" placeholder="Masukkan Alamat">

                <label class="label">Provinsi</label>
                <input class="form-control" name="provinsi" placeholder="Masukkan Provinsi">

                <label class="label">Kota</label>
                <input class="form-control" name="kota" placeholder="Masukkan Kota">

                <label class="label">Kecamatan</label>
                <input class="form-control" name="kecamatan" placeholder="Masukkan Kecamatan">

                <label class="label">Kelurahan</label>
                <input class="form-control" name="kelurahan" placeholder="Masukkan Kelurahan">

                <label class="label">Kode Pos</label>
                <input class="form-control" name="kodepos" placeholder="Kode Pos">

                <label class="label">No. Telp</label>
                <input type="number" name="notelp" class="form-control" placeholder="Masukkan No. Telp">

                <label class="label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email">

                <label class="label">Item</label>
                <input type="text" name="item" class="form-control" placeholder="Masukkan Item">
                <label class="label">Nama Bank</label>
                <input type="text" class="form-control" name="nama_bank" placeholder="Pilih Nama Bank">
                <label class="label">No. Rekening</label>
                <input type="text" class="form-control" name="no_rekening" placeholder="Masukkan Nomor Rekening">
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
                                    <form  action="{{ url('mastersupplier/delete/' . $prm->id_supplier) }}" method="POST">
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
