@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pembelian Barang</h1>
    </div>
    <div class="form-group">
        
        <form action="{{ url('doPembelianbarang') }}" method="post">
            @csrf
            <label class="label" form="disabledTextInput">Tipe Box</label>
            <input id="disabledTextInput" class="form-control" name="ttipebox" placeholder="Masukkan Tipe Box">
    
            <label class="label">Nama Barang</label>
            <input class="form-control" placeholder="Masukkan Nama Box" name="tnamabarang" >
    
            <label class="label">Jenis Barang</label>
            <input class="form-control" placeholder="Jenis Barang" name="tjenisbarang" >
    
            <label class="label">Supplier</label>
            <input class="form-control" placeholder="supplier" name="tsupplier" >
    
            <label class="label">Jumlah</label>
            <input class="form-control" placeholder="jumlah" name="tjumlah" >
    
            <label class="label">Harga</label>
            <input type="number" class="form-control" placeholder="Masukkan Harga" name="tharga" >
    
            <label class="label">Diskon</label>
            <input type="number" class="form-control" placeholder="Masukkan Diskon" name="tdiskon" >
    
            <label class="label">Nett</label>
            <input type="number" class="form-control" placeholder="Nett" name="tnett">
    
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        

    </div>
</div>
@endsection