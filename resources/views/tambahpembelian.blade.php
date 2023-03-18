@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pembelian Barang</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">Tipe Box</label>
        <input id="disabledTextInput" class="form-control" placeholder="Masukkan Tipe Box">

        <label class="label">Nama Barang</label>
        <input class="form-control">

        <label class="label">Jenis Barang</label>
        <select data-live-search="true" class="selectpicker form-control">
            <option selected>Pilih Jenis Barang</option>
            <option>Pisau</option>
            <option>Plat</option>
            <option>Kertas Sisa</option>
            <option>Barang Lain-lain</option>
        </select>

        <label class="label">Supplier</label>
        <input class="form-control">

        <label class="label">Jumlah</label>
        <input class="form-control">

        <label class="label">Harga</label>
        <input type="number" class="form-control" placeholder="Masukkan Harga">

        <label class="label">Diskon</label>
        <input type="number" class="form-control" placeholder="Masukkan Diskon">

        <label class="label">Nett</label>
        <input type="number" class="form-control" placeholder="Nett" disabled>

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</div>
@endsection