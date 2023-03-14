@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form DP/Pembayaran</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">No. Penawaran</label>
        <select data-live-search="true" class="selectpicker form-control">
            <option selected>Pilih No. Penawaran</option>
            <option>1001</option>
            <option>2002</option>
            <option>3003</option>
        </select>

        <label class="label">Nama Brand</label>
        <input class="form-control" placeholder="Masukkan nama brand">

        <label class="label">Nama PIC</label>
        <input class="form-control" placeholder="Masukkan Nama PIC">

        <label class="label">Customer</label>
        <input class="form-control" placeholder="Masukkan Customer">
    
        <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
        <input class="form-control" placeholder="Jenis Box">

        <label for="exampleFormControlTextarea1" class="label">Quantity</label>
        <input type="number" class="form-control" placeholder="Masukkan Quantity">

        <label for="exampleFormControlTextarea1" class="label">Jumlah Produksi</label>
        <input type="number" class="form-control" placeholder="Masukkan Jumlah">

        <label for="exampleFormControlTextarea1" class="label">Harga</label>
        <input type="number" class="form-control" placeholder="Masukkan Harga">

        <label for="exampleFormControlTextarea1" class="label">Pembayaran</label>
        <input class="form-control" placeholder="Masukkan pembayaran">

        <label for="exampleFormControlTextarea1" class="label">Sisa</label>
        <input class="form-control" placeholder="Masukkan sisa">

        <label for="exampleFormControlTextarea1" class="label">Termin Pembayaran</label>
        <input class="form-control" placeholder="Masukkan termin pembayaran">
    
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    

</div>
@endsection