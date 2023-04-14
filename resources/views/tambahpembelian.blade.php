@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pembelian Barang</h1>
    </div>
    <div class="form-group">

        <form action="{{ url('doPembelianbarang') }}" method="post">
            @csrf
            <label class="label" form="readonlyTextInput">Tipe Box</label>
            <input id="readonlyTextInput" class="form-control" name="ttipebox" placeholder="Masukkan Tipe Box">

            <label class="label">Nama Barang</label>
            <input class="form-control" placeholder="Masukkan Nama Box" name="tnamabarang" >

            <label class="label">Jenis Barang</label>
            <input class="form-control" placeholder="Jenis Barang" name="tjenisbarang" >

            <label class="label">Supplier</label>
            <input class="form-control" placeholder="supplier" name="tsupplier" >

            <label class="label">Jumlah</label>
            <input class="form-control" placeholder="jumlah" onchange="totalnett()" name="tjumlah" >

            <label class="label">Harga</label>
            <input type="number" class="form-control" onchange="totalnett()" placeholder="Masukkan Harga" name="tharga" >

            <label class="label">Diskon</label>
            <input type="number" class="form-control" onchange="totalnett()" placeholder="Masukkan Diskon" name="tdiskon" >

            <label class="label">Nett</label>
            <input type="number" class="form-control" placeholder="Nett" name="tnett">

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script>
    function totalnett()
    {
        var qtynya = parseInt($("[name='tjumlah']").val());
        var diskon = parseInt($("[name='tdiskon']").val());
        var hargasatuannya = parseInt($("[name='tharga']").val());
        // var harga_satuan = parseInt($("[name='harga_satuan']").val());
        var tempjum = (qtynya*hargasatuannya)-((qtynya*hargasatuannya)*diskon/100);
        // var tempnett = tempjum-(diskon/100);
        $("[name='tnett']").val(tempjum);
    }
</script>
@endsection
