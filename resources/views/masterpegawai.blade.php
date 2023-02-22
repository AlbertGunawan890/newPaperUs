@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Pegawai</h1>
    </div>

    <div class="container" style="float: left;">
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="disabledTextInput">Kode Pegawai</label>
                    <input id="idPegawai" class="form-control" placeholder="Kode" disabled>
                </div>
                <div class="col">
                    <label>Nama Pegawai</label>
                    <input id="namaPegawai" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="col-3">
                    <label>NPWP</label>
                    <input id="npwpPegawai" type="number" class="form-control" placeholder="Masukkan NPWP">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Provinsi</label>
                    <input id="provinsiPegawai" type="text" class="form-control" placeholder="Masukkan Provinsi">
                </div>
                <div class="col">
                    <label>Kota</label>
                    <input id="kotaPegawai" type="text" class="form-control" placeholder="Masukkan Kota">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <label>Kecamatan</label>
                    <input id="kecamatanPegawai" type="text" class="form-control" placeholder="Masukkan Kecamatan">
                </div>
                <div class="col-5">
                    <label>Kelurahan</label>
                    <input id="kelurahanPegawai" type="text" class="form-control" placeholder="Masukkan Kelurahan">
                </div>
                <div class="col-2">
                    <label>Kode Pos</label>
                    <input id="kosposPegawai" type="text" class="form-control" placeholder="Masukkan Kode Pos">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Alamat</label>
                    <input id="alamatPegawai" type="text" class="form-control" placeholder="Masukkan Alamat Lengkap">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>No Telp.</label>
                    <input id="telpPegawai" type="number" class="form-control" placeholder="Masukkan No Telp.">
                </div>
                <div class="col">
                    <label>Email</label>
                    <input id="emailPegawai" type="email" class="form-control" placeholder="Masukkan Alamat Email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Role</label>
                    <select id="rolePegawai" class="form-control">
                            <option>Pilih Role</option>
                            <option>Admin</option>
                            <option>Staff</option>
                        </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
@endsection
