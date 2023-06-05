@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Pegawai</h1>
        </div>

        <div class="card">
            <div class="card-header">
              <a href={{ url('tambahpegawai') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                  </button>
                </a>

            </div>
            <div class="card-body">
            <form action="">
                @csrf

            </form>
            <table id="tabelMasterPegawai" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arrPegawai as $prm)
                    <tr>
                        <td>{{$prm->id_pegawai}}</td>
                        <td>{{$prm->nama_pegawai}}</td>
                        <td>{{$prm->alamat_pegawai}}</td>
                        <td>{{$prm->notelp_pegawai}}</td>
                        <td>{{$prm->email_pegawai}}</td>
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
                                                    Edit Pegawai
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="label">Nama Pegawai</label>
                <input name="nama" class="form-control" placeholder="Masukkan Nama">

                <label class="label">NPWP</label>
                <input name="npwp" class="form-control" placeholder="Masukkan NPWP">

                <label class="label">Alamat</label>
                <input name="alamat" class="form-control" placeholder="Masukkan Alamat">

                <label class="label">Provinsi</label>
                <input name="provinsi" class="form-control" placeholder="Masukkan Provinsi">

                <label class="label">Kota</label>
                <input name="kota" class="form-control" placeholder="Masukkan Kota">

                <label class="label">Kecamatan</label>
                <input name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan">

                <label class="label">Kelurahan</label>
                <input name="kelurahan" class="form-control" placeholder="Masukkan Kelurahan">

                <label class="label">Kode Pos</label>
                <input name="kodepos" class="form-control" placeholder="Kode Pos">

                <label class="label">No. Telp</label>
                <input name="notelp" type="number" class="form-control" placeholder="Masukkan No. Telp">

                <label class="label">Fax</label>
                <input name="fax" type="number" class="form-control" placeholder="Masukkan No. Fax">

                <label class="label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Masukkan Email">

                <label class="label">Kontak Personal</label>
                <input name="kontak_personal" type="text" class="form-control" placeholder="Masukkan Kontak Personal">

                <label class="label">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Masukkan Password">

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
                                <form  action="{{ url('masterpegawai/delete/' . $prm->id_pegawai) }}" method="POST">
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
