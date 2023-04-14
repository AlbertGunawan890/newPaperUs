@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Stok</h1>
        </div>

        <div class="container" style="float: left;">
            <div class="form-group">

                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <label class="label">Nomor PO</label>
                            <select id="idPO" class="form-control selectpicker" data-live-search="true">
                                <option>Pilih No. PO</option>
                                <option>567</option>
                                <option>8901</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label" for="readonlyTextInput">Jenis Barang</label>
                        <input id="jenisPO" class="form-control" placeholder="Jenis barang" readonly>
                    </div>
                    <div class="col">
                        <label class="label" for="readonlyTextInput">Jumlah Barang</label>
                        <input id="jumlahPO" class="form-control" placeholder="Jumlah" readonly>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
