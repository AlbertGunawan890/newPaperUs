@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form PO</h1>
        </div>

        <div class="container" style="float: left;">
            <div class="form-group">
                <div class="row">
                    <div class="col-10">
                        <div class="form-floating">
                            <label class="label">Supplier</label>
                            <select id="poSupplier" class="form-control selectpicker" data-live-search="true">
                                <option>Pilih Supplier</option>
                                <option>PT. A</option>
                                <option>PT. X</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label class="label" for="disabledTextInput">Jenis Barang</label>
                        <input id="poJenis" class="form-control" placeholder="Jenis barang" disabled>
                    </div>
                    <div class="col-3">
                        <label class="label">Jumlah Pesanan</label>
                        <input id="poJumlah" type="number" class="form-control" placeholder="Masukkan Jumlah Pesanan">
                    </div>
                    <div class="col-3">
                        <label class="label" for="disabledTextInput">Pesanan terakhir</label>
                        <input id="poPesananTerakhir" class="form-control" placeholder="Pesanan terakhir" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label class="label">Harga</label>
                        <input id="poHarga" type="number" class="form-control" placeholder="Masukkan Harga">
                    </div>
                    <div class="col-5">
                        <label class="label" for="disabledTextInput">Harga Pesanan Terakhir</label>
                        <input id="poHargaTerakhir" class="form-control" placeholder="Harga Pesanan terakhir" disabled>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
@endsection