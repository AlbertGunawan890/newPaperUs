@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Surat Jalan</h1>
    </div>
    <div class="form-group">
        <form action="{{ url('/tambahPengiriman') }}" method="POST">
            @csrf
            <label class="label" for="readonlyTextInput">No. SPK</label>
            <input id="readonlyTextInput" class="form-control" placeholder="No. SPK" name="no_spk">

            <label class="label">No. Surat Jalan</label>
            <input class="form-control" placeholder="Masukkan No. Surat Jalan" name="no_surat_jalan">

            <label for="exampleFormControlTextarea1" class="label">No. Kendaraan</label>
            <input class="form-control" placeholder="Masukkan No. Kendaraan" name="no_kendaraan">

            <label for="exampleFormControlTextarea1" class="label">Nama Pengirim</label>
            <input class="form-control" placeholder="Masukkan Nama Pengirim" name="nama_pengirim">

            <label for="exampleFormControlTextarea1" class="label">Nama Penerima</label>
            <input class="form-control" placeholder="Masukkan Nama Penerima" name="nama_penerima">

            <label for="exampleFormControlTextarea1" class="label">Alamat Penerima</label>
            <input class="form-control" placeholder="Masukkan Alamat Lengkap Penerima" name="alamat_penerima">

            <label for="exampleFormControlTextarea1" class="label">Qty</label>
            <input type="number" class="form-control" placeholder="Masukkan Jumlah" name="qty">

            <label for="exampleFormControlTextarea1" class="label">Tanggal</label>
            <input type="date" class="form-control" placeholder="Pilih Tanggal" name="tanggal">

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection
