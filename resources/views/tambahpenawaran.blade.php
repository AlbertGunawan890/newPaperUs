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

        <label class="label">Nama Brand</label>
        <select data-live-search="true" class="selectpicker form-control">
          <option selected>Pilih Nama Brand</option>
          <option>Alpha</option>
          <option>Bravo</option>
          <option>Charlie</option>
        </select>
    
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

        <div class="checkbox">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Kertas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Tinta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
            <label class="form-check-label" for="inlineCheckbox3">Laminasi</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
            <label class="form-check-label" for="inlineCheckbox4">Plong</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
            <label class="form-check-label" for="inlineCheckbox5">Hotprint</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
            <label class="form-check-label" for="inlineCheckbox6">Sortir</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option2">
            <label class="form-check-label" for="inlineCheckbox7">Pembelian Dus</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
            <label class="form-check-label" for="inlineCheckbox8">Packing</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
            <label class="form-check-label" for="inlineCheckbox9">Emboss</label>
          </div>

          <button onclick="showCheckbox()" type="button" class="btn btn-info">Tambah</button>
        </div>
        <div class="checkbox" id="myCheckbox" style="display: none;">
          <br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Kertas</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Tinta</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
              <label class="form-check-label" for="inlineCheckbox3">Laminasi</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
              <label class="form-check-label" for="inlineCheckbox4">Plong</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
              <label class="form-check-label" for="inlineCheckbox5">Hotprint</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
              <label class="form-check-label" for="inlineCheckbox6">Sortir</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option2">
              <label class="form-check-label" for="inlineCheckbox7">Pembelian Dus</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
              <label class="form-check-label" for="inlineCheckbox8">Packing</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
              <label class="form-check-label" for="inlineCheckbox9">Emboss</label>
            </div>
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

        function showCheckbox() {
          var x = document.getElementById("myCheckbox");

          if (x.style.display == "none"){
            x.style.display = "block";
          }
        }
    </script>
</div>

@endsection