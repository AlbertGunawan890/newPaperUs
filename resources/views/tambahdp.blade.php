@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form DP/Pembayaran</h1>
        </div>
        <div class="form-group">
            <form action="{{ url('doAddpembayaran') }}" method="post">
                @csrf
                <label class="label" for="disabledTextInput">No. Penawaran</label>
                <select data-live-search="true" class="selectpicker form-control" name="id_penawaran"
                    onchange="nama_brand_change()">
                    <option selected>Pilih No. Penawaran</option>
                    @foreach ($penawaran as $prm)
                        <option value={{ $prm->id_penawaran }}>{{ $prm->id_penawaran }}</option>
                    @endforeach
                </select>

                <label class="label">Nama Brand</label>
                <input class="form-control" name="nama_brand" placeholder="Masukkan Nama Brand">

                <label class="label">Nama PIC</label>
                <input class="form-control" name="pic" placeholder="Masukkan Nama PIC">

                <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
                <input class="form-control" name="jenis_box" placeholder="Jenis Box">

                <label for="exampleFormControlTextarea1" class="label">Quantity</label>
                <input type="number" class="form-control" name="qty" placeholder="Masukkan Quantity">

                <label for="exampleFormControlTextarea1" class="label">Jumlah Produksi</label>
                <input type="number" class="form-control" name="jum_produksi" placeholder="Masukkan Jumlah">

                <label for="exampleFormControlTextarea1" class="label">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga">

                <label for="exampleFormControlTextarea1" class="label">Pembayaran</label>
                <input class="form-control" name="pembayaran" onchange="sisaPembayaran()" placeholder="Masukkan Pembayaran">

                <label for="exampleFormControlTextarea1" class="label">Sisa</label>
                <input class="form-control" name="sisa" placeholder="Masukkan Sisa">

                <label for="exampleFormControlTextarea1" class="label">Termin Pembayaran</label>
                <input class="form-control" type="date" name="termin" value="<?php echo date('Y-m-d'); ?>"
                    placeholder="Masukkan Termin Pembayaran">

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function sisaPembayaran() {
            var harga = parseInt($("[name='harga']").val());
            var pembayaran = parseInt($("[name='pembayaran']").val());
            var temp = harga - pembayaran;
            $("[name='sisa']").val(temp);
        }

        function nama_brand_change() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Pembayaran"
                },
                success: function(data) {
                    var temp = data.split(",");
                    $("[name='nama_brand']").val(temp[0]);
                    $("[name='pic']").val(temp[1]);
                    $("[name='jenis_box']").val(temp[2]);
                    $("[name='qty']").val(temp[3]);
                    $("[name='jum_produksi']").val(temp[4]);
                    $("[name='harga']").val(temp[5]);
                }
            });
        }
    </script>
@endsection
