@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Vendor</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">ID Vendor</label>
        <input id="disabledTextInput" class="form-control" placeholder="ID Customer" disabled>

        <label class="label">Nama Vendor</label>
        <input class="form-control" placeholder="Masukkan Nama Vendor">

        <label class="label">Jenis Item</label>
        <input class="form-control" placeholder="Masukkan Jenis Item">

        <label class="label">Kategori</label>
        <input class="form-control" placeholder="Masukkan Kategori">

        <label class="label">Alamat</label>
        <input class="form-control" placeholder="Masukkan Provinsi">

        <label class="label">Kota</label>
        <input class="form-control" placeholder="Masukkan Kota">

        <label class="label">Kecamatan</label>
        <input class="form-control" placeholder="Masukkan Kecamatan">

        <label class="label">Kelurahan</label>
        <input class="form-control" placeholder="Masukkan Kelurahan">

        <label class="label">Email</label>
        <input type="email" class="form-control" placeholder="Masukkan Email">

        <label class="label">Nama Bank</label>
        <input class="form-control" placeholder="Masukkan Nama Bank">

        <label class="label">No. Akun</label>
        <input class="form-control" placeholder="Masukkan No. Akun">

        <label class="label">No. Rekening</label>
        <input class="form-control" placeholder="Masukkan No. Rek">

        <label class="label">Batasan Hutang</label>
        <input type="number" class="form-control">

        <label class="label">Hutang Sekarang</label>
        <input type="number" class="form-control">

        <label class="label">Hutang Tersedia</label>
        <input type="number" class="form-control">

        <label class="label">Sisa Hutang</label>
        <input type="number" class="form-control">

        <label class="label">Metode Pembayaran</label>
        <input type="number" class="form-control">
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>                        
    </div>

</div>
@endsection