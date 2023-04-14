@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">History Barang Selesai</h1>
        </div>

        <div class="container" style="float: left;">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating">
                            <label class="label">ID Penawaran</label>
                            <select id="idHistory" class="form-control selectpicker" data-live-search="true">
                                <option>Pilih ID Penawaran</option>
                                <option>131231</option>
                                <option>123123</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="label" for="readonlyTextInput">Nama Customer</label>
                        <input id="historyCustomer" class="form-control" placeholder="Jenis barang" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <label class="label">Jenis Barang</label>
                        <input id="jenisHistory" type="text" class="form-control" placeholder="Jumlah">
                    </div>
                    <div class="col-5">
                        <label class="label" for="readonlyTextInput">Jumlah</label>
                        <input id="jumlahHistory" class="form-control" placeholder="Jumlah" readonly>
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
