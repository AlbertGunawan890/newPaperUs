@extends('layouts.master')
@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Pegawai</h1>
        </div>
        <form action="{{ url('doAddpegawai') }}" method="post">
            @csrf
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
                <input name="kontak_personal" type="text" class="form-control" placeholder="Masukkan Kontak Personal">

                <label class="label">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Masukkan Password">

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
