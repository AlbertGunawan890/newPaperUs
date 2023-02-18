@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Penawaran</h1>
    </div>

    <div class="container" style="float: left;">
        <div class="form-group">
            
            <div class="row">
                <div class="col-5">
                    <div class="form-floating">
                        <label class="label">No. Penawaran</label>
                        <select id="idPenawaran" class="form-control selectpicker" data-live-search="true">
                            <option selected>Pilih No. Penawaran</option>
                            <option>567</option>
                            <option>8901</option>
                        </select>
                    </div>
                </div>
                <div class="col-7">
                    <label class="label" for="disabledTextInput">Nama Customer</label>
                    <input id="namaPenawaran" class="form-control" placeholder="Nama Customer" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label">Jenis Barang</label>
                    <input id="jenisPenawaran" class="form-control" placeholder="Jenis barang">
                </div>
                <div class="col">
                    <label class="label">Jumlah Barang</label>
                    <input id="jumlahPenawaran" type="number" class="form-control" placeholder="Jumlah">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label" for="disabledTextInput">Jumlah Produksi</label>
                    <input id="jumlahproduksiPenawaran" class="form-control" placeholder="Jumlah Produksi" disabled>
                </div>
                <div class="col">
                    <label class="label">Harga</label>
                    <input id="hargaPenawaran" type="number" class="form-control" placeholder="Harga">
                </div>
                <div class="col-2">
                    <label class="label">Diskon</label>
                    <input id="diskonPenawaran" type="number" class="form-control" placeholder="Diskon">
                </div>
                <div class="col">
                    <label class="label">Nett</label>
                    <input id="nettPenawaran" type="number" class="form-control" placeholder="Harga" disabled>
                </div>
            </div>

        </div>
        <button type="submit " class="btn btn-primary my-3 ">Submit</button>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
