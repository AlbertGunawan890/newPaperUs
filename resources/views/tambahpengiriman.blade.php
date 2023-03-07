@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Surat Jalan</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">No. SPK</label>
        <input id="disabledTextInput" class="form-control" placeholder="No. SPK" disabled>

        <label class="label">No. Surat Jalan</label>
        <input class="form-control" placeholder="Masukkan No. Surat Jalan">
    
        <label for="exampleFormControlTextarea1" class="label">No. Kendaraan</label>
        <input class="form-control" placeholder="Masukkan No. Kendaraan">

        <label for="exampleFormControlTextarea1" class="label">Nama Pengirim</label>
        <input class="form-control" placeholder="Masukkan Nama Pengirim">

        <label for="exampleFormControlTextarea1" class="label">Nama Penerima</label>
        <input class="form-control" placeholder="Masukkan Nama Penerima">

        <label for="exampleFormControlTextarea1" class="label">Alamat Penerima</label>
        <input class="form-control" placeholder="Masukkan Alamat Lengkap Penerima">

        <label for="exampleFormControlTextarea1" class="label">Qty</label>
        <input type="number" class="form-control" placeholder="Masukkan Jumlah">

        <label for="exampleFormControlTextarea1" class="label">Tanggal</label>
        <input type="date" class="form-control" placeholder="Pilih Tanggal">
    
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection