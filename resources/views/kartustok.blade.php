@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kartu Stok</h1>
        </div>

        <div class="container" style="float: left;">
            <div class="form-group">
                <div class="row">
                    <div class="col-9">
                        <div class="form-floating">
                            <label class="label">Jenis Barang</label>
                            <select id="stokJenis" class="form-control selectpicker" data-live-search="true">
                                <option>Pilih Jenis Barang</option>
                                <option>laptop</option>
                                <option>kertas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <label class="label" for="disabledTextInput">Jumlah Barang</label>
                        <input id="stokJumlah" class="form-control" placeholder="Jenis barang" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="margin-top: 37px;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="stokMasuk" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Barang Masuk</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="stokKeluar" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Barang Keluar</label>
                        </div>

                    </div>
                    <div class="col-4">
                        <label class="label">Quantity</label>
                        <input id="stokQty" type="number" class="form-control" placeholder="Jumlah">
                    </div>
                    <div class="col-4">
                        <label class="label" for="disabledTextInput">Jumlah</label>
                        <input id="stokJumlah" class="form-control" placeholder="Jumlah" disabled>
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