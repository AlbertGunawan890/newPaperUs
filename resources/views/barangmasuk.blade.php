@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Barang Masuk</h1>
        </div>
        <div class="form-group">
            <form action="{{ url('dobarangmasuk') }}" method="post">
                @csrf
                <label class="label">Nama Barang</label>
                <input class="form-control" name="tnama" placeholder="Masukkan Nama Barang">

                <label class="label">Jenis Barang</label>
                <select data-live-search="true" name="tjenisbarang" class="selectpicker form-control">
                    <option selected>Pilih Jenis Barang</option>
                    <option>Pisau</option>
                    <option>Plat</option>
                    <option>Kertas Sisa</option>
                    <option>Barang Lain-lain</option>
                </select>

                <label class="label">Jumlah Masuk</label>
                <input class="form-control" onchange="hartot()" name="tjumlah" placeholder="Masukkan Jumlah">

                <label class="label">Harga Satuan</label>
                <input class="form-control" onchange="hartot()" name="tjumlahsatuan" placeholder="Masukkan Harga Satuan">

                <label class="label">Harga Total</label>
                <input class="form-control" name="tjumlahtotal" placeholder="Harga Total">

                <label class="label">Lokasi Barang</label>
                <input class="form-control" name="tlokasi" placeholder="Masukkan Jumlah">

                <label class="label">Keterangan</label>
                <textarea class="form-control" name="tketerangan" aria-label="With textarea"></textarea>

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function hartot(){
            var qtynya = parseInt($("[name='tjumlah']").val());
            var hargasatuannya = parseInt($("[name='tjumlahsatuan']").val());
            // var harga_satuan = parseInt($("[name='harga_satuan']").val());
            var temp = (qtynya*hargasatuannya);
            $("[name='tjumlahtotal']").val(temp);
        }
    </script>
@endsection
