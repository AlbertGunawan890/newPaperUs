@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Vendor</h1>
    </div>
    <div class="form-group">
        <form action="{{url('doAddvendor')}}"method="post">
        @csrf
        <label class="label" for="disabledTextInput">ID Vendor</label>
        <input id="disabledTextInput" class="form-control" placeholder="ID Vendor" disabled>

        <label class="label">Nama Vendor</label>
        <input class="form-control" placeholder="Masukkan Nama Vendor" name="nama">

        <label class="label">Jenis Item</label>
        <input class="form-control" placeholder="Masukkan Jenis Item" name="jenis_item">

        <label class="label">Kategori</label>
        <input class="form-control" placeholder="Masukkan Kategori" name="kategori">

        <label class="label">Alamat</label>
        <input class="form-control" placeholder="Masukkan Alamat" name="alamat">

        <label class="label">Kota</label>
        <input class="form-control" placeholder="Masukkan Kota" name="kota">

        <label class="label">Kecamatan</label>
        <input class="form-control" placeholder="Masukkan Kecamatan" name="kecamatan">

        <label class="label">Kelurahan</label>
        <input class="form-control" placeholder="Masukkan Kelurahan" name="kelurahan">

        <label class="label">Email</label>
        <input type="email" class="form-control" placeholder="Masukkan Email" name="email">

        <label class="label">Nama Bank</label>
        <input class="form-control" placeholder="Masukkan Nama Bank" name="nama_bank">

        <label class="label">No. Akun</label>
        <input type="number" class="form-control" placeholder="Masukkan No. Akun" name="no_akun">

        <label class="label">No. Rekening</label>
        <input type="number" class="form-control" placeholder="Masukkan No. Rek" name="no_rekening">

        <label class="label">Batasan Hutang</label>
        <input type="number" class="form-control" name="batasan_hutang">

        <label class="label">Hutang Sekarang</label>
        <input type="number" class="form-control" name="hutang_sekarang">

        <label class="label">Hutang Tersedia</label>
        <input type="number" class="form-control" name="hutang_tersedia">

        <label class="label">Sisa Hutang</label>
        <input type="number" class="form-control" name="sisa_hutang">

        <label class="label">Metode Pembayaran</label>
        <input class="form-control" name="metode_pembayaran">

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</div>
@endsection
