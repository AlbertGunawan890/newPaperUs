@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Desain dan Pisau</h1>
        </div>
        <div class="form-group">
            <form action="{{ url('/doAddDesain') }}" method="post">
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
                <input class="form-control" name="pic" placeholder="Customer">

                <label class="label">Jenis Box</label>
                <input class="form-control" name="jenis_box" placeholder="Jenis Box">

                <label class="label">Link Desain</label>
                <input class="form-control" name="link" placeholder="Link Desain">

                <label class="label" for="readonlyTextInput">Jenis Pisau</label>
                <select data-live-search="true" class="selectpicker form-control" name="pisau">
                    <option selected>Pilih Jenis Pisau</option>
                    @foreach ($pisau as $prm)
                        <option value={{ $prm->namabarang }}>{{ $prm->namabarang }}</option>
                    @endforeach
                </select>

                <label class="label" for="readonlyTextInput">Jenis Plat</label>
                <select data-live-search="true" class="selectpicker form-control" name="plat">
                    <option selected>Pilih Jenis Plat</option>
                    @foreach ($plat as $prm)
                        <option value={{ $prm->namabarang }}>{{ $prm->namabarang }}</option>
                    @endforeach
                </select>

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
                    ctr: "DesainCustomer"
                },
                success: function(data) {
                    var temp = data.split(",");
                    $("[name='pic']").val(temp[0]);
                    $("[name='jenis_box']").val(temp[1]);
                }
            });
        }
    </script>
@endsection
