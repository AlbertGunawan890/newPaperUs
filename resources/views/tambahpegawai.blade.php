@extends('layouts.master')
@section('content')
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Pegawai</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">ID Pegawai</label>
        <input id="disabledTextInput" class="form-control" placeholder="ID Pegawai" disabled>

        <label class="label">Nama Pegawai</label>
        <input class="form-control" placeholder="Masukkan Nama">

        <label class="label">NPWP</label>
        <input class="form-control" placeholder="Masukkan NPWP">

        <label class="label">Alamat</label>
        <input class="form-control" placeholder="Masukkan Alamat">

        <label class="label">Provinsi</label>
        <input class="form-control" placeholder="Masukkan Provinsi">

        <label class="label">Kota</label>
        <input class="form-control" placeholder="Masukkan Kota">

        <label class="label">Kecamatan</label>
        <input class="form-control" placeholder="Masukkan Kecamatan">

        <label class="label">Kelurahan</label>
        <input class="form-control" placeholder="Masukkan Kelurahan">

        <label class="label">Kode Pos</label>
        <input class="form-control" placeholder="Kode Pos">

        <label class="label">No. Telp</label>
        <input type="number" class="form-control" placeholder="Masukkan No. Telp">

        <label class="label">Fax</label>
        <input type="number" class="form-control" placeholder="Masukkan No. Fax">

        <label class="label">Email</label>
        <input type="email" class="form-control" placeholder="Masukkan Email">

        <label class="label">Kontak Personal</label>
        <input type="text" class="form-control" placeholder="Masukkan Kontak Personal">

        <label class="label">Password</label>
        <input type="password" class="form-control" placeholder="Masukkan Password">

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>

@endsection