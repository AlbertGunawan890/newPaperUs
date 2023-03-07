@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Penawaran</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">No. Penawaran</label>
        <input id="disabledTextInput" class="form-control" placeholder="No. SPK" disabled>

        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="cbPenjualan" value="option3" onchange="myFunction()">
            <label class="form-check-label" for="inlineRadioA">Penjualan</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions1" onchange="myFunction()" id="cbStok" value="option3">
            <label class="form-check-label" for="inlineRadioB">Stok Jadi</label>
        </div>
        <br>

        <label class="label">Customer</label>
        <input class="form-control" placeholder="Pilih Customer">
    
        <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
        <input class="form-control" placeholder="Jenis Box">

        <label for="exampleFormControlTextarea1" class="label">Panjang</label>
        <input class="form-control" placeholder="Masukkan panjang">

        <label for="exampleFormControlTextarea1" class="label">Lebar</label>
        <input class="form-control" placeholder="Masukkan lebar">

        <label for="exampleFormControlTextarea1" class="label">Tinggi</label>
        <input class="form-control" placeholder="Masukkan tinggi">

        <label for="exampleFormControlTextarea1" class="label">Quantity</label>
        <input type="number" class="form-control" placeholder="Masukkan Quantity">

        <label for="exampleFormControlTextarea1" class="label">Jumlah Produksi</label>
        <input type="number" class="form-control" placeholder="Masukkan Jumlah">
        
        <br>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Beli kertas</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Cetak kertas</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">Plong</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option3">
            <label class="form-check-label" for="inlineRadio4">Embos</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option3">
            <label class="form-check-label" for="inlineRadio5">Hot print</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option3">
            <label class="form-check-label" for="inlineRadio6">Laminasi</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option3">
            <label class="form-check-label" for="inlineRadio7">Add-on</label>
        </div>

        <br>
        <label for="exampleFormControlTextarea1" class="label">Harga Satuan</label>
        <input type="number" id="formHarga" class="form-control" placeholder="Masukkan Harga">

        <label for="exampleFormControlTextarea1" class="label">Harga Satuan Terakhir</label>
        <input type="number" class="form-control" disabled>

        <label for="exampleFormControlTextarea1" class="label">Diskon</label>
        <input class="form-control" placeholder="Masukkan Diskon">

        <label for="exampleFormControlTextarea1" class="label">Nett</label>
        <input class="form-control">

        <label for="exampleFormControlTextarea1" class="label">Harga Nett Terakhir</label>
        <input type="number" class="form-control" disabled>

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <script>
        function myFunction(){
            var checkBox = document.getElementById("cbStok");
            var form = document.getElementById("formHarga");
    
            if (checkBox.checked == true){
                alert("Stok Jadi");
                document.getElementById("formHarga").disabled = true;
            } 
            else {
                alert("Penjualan");
                document.getElementById("formHarga").disabled = false;
            }
        }
    </script>
</div>

@endsection