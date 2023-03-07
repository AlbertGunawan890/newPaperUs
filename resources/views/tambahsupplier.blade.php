@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Supplier</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">ID Supplier</label>
        <input id="disabledTextInput" class="form-control" placeholder="ID Supplier" disabled>

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

        <label class="label">Email</label>
        <input type="email" class="form-control" placeholder="Masukkan Email">

        <label class="label">Item</label>
        <input type="text" class="form-control" placeholder="Masukkan Item">
        <label class="label">Nama Bank</label>
        <input type="text" class="form-control" placeholder="Pilih Nama Bank">
        <label class="label">No. Rekening</label>
        <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening">

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection