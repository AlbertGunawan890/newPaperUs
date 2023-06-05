@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Penagihan / Invoicing</h1>
        </div>
        <div class="form-group">
            <form action="{{ url('/doAddpenagihan') }}" method="post">
                @csrf
                <label class="label" for="readonlyTextInput">No. Penawaran</label>
                <select data-live-search="true" class="selectpicker form-control" name="id_penawaran"
                    onchange="nama_brand_change()">
                    <option selected>Pilih No. Penawaran</option>
                    @foreach ($pembayaran as $prm)
                        <option value={{ $prm->id_penawaran }}>{{ $prm->id_penawaran }}</option>
                    @endforeach
                </select>

                <label class="label">Customer</label>
                <input class="form-control" placeholder="Pilih Customer" name="pic">

                <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
                <input class="form-control" placeholder="Pilih Jenis Box" name="jenis_box">

                <label for="exampleFormControlTextarea1" class="label">Jumlah</label>
                <input class="form-control" placeholder="Jumlah" name="qty">

                <label for="exampleFormControlTextarea1" class="label">Nominal</label>
                <input type="number" class="form-control" placeholder="Nominal" name="harga">

                <label for="exampleFormControlTextarea1" class="label">Sudah Terbayar</label>
                <input type="number" class="form-control" name="sudah_terbayar">

                <label for="exampleFormControlTextarea1" class="label">Sisa Hutang</label>
                <input type="number" class="form-control" name="sisa_hutang">

                <label for="exampleFormControlTextarea1" class="label">Jumlah Bayar</label>
                <input type="number" class="form-control" name="jumlah_bayar">

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function nama_brand_change() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Penagihan"
                },
                success: function(data) {
                    var temp = data.split(",");
                    $("[name='pic']").val(temp[0]);
                    $("[name='jenis_box']").val(temp[1]);
                    $("[name='qty']").val(temp[2]);
                    $("[name='harga']").val(temp[3]);
                    $("[name='sudah_terbayar']").val(temp[4]);
                    $("[name='sisa_hutang']").val(temp[5]);
                    $("[name='jumlah_bayar']").val(temp[5]);
                }
            });
        }
    </script>
@endsection
