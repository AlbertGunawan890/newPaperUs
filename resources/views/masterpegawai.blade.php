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
                <button type="button" class="btn btn-primary my-auto" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Data
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Form Pegawai</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">

                                <label class="label" for="disabledTextInput">ID Pegawai</label>
                                <input name="id" id="disabledTextInput" class="form-control" placeholder="ID Pegawai" disabled>

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
                                <input name="kontal_personal" type="text" class="form-control" placeholder="Masukkan Kontak Personal">

                                <label class="label">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Masukkan Password">

                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
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
                    <tr>
                        <td>12321312</td>
                        <td>Hendra Setiawan</td>
                        <td>Jl. Semampir Barat Gg. VIII No.11</td>
                        <td>08123456678</td>
                        <td>example@example.com</td>
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
