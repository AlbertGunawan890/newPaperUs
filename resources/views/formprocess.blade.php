@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Processing</h1>
        </div>

        <div class="container-fluid">
            <div class="form-group">
                <div class="row">
                    <div class="col-8">
                        <div class="form-floating">
                            <label class="label">ID Penawaran</label>
                            <select id="idPenawaran" class="form-control selectpicker" data-live-search="true">
                                <option>Pilih ID Penawaran</option>
                                <option>1231231</option>
                                <option>54768</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <label class="label" for="disabledTextInput">Nama Customer</label>
                        <input id="custProcess" class="form-control" placeholder="Nama Customer" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <label class="label">Jenis Barang</label>
                        <input id="processJenisBarang" type="number" class="form-control" placeholder="Jenis Barang" disabled>
                    </div>
                    <div class="col-5">
                        <label class="label" for="disabledTextInput">Link Desain</label>
                        <input id="processLink" class="form-control" placeholder="Link Desain" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <label class="label" for="disabledTextInput">Harga</label>
                        <input id="processHarga" class="form-control" placeholder="Harga" disabled>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </div>
            <hr>
            <table class="table text-center align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis Produksi</th>
                        <th scope="col">Nama Subcon</th>
                        <th scope="col-1">Jumlah Produksi</th>
                        <th scope="col">Harga</th>
                        <th scope="col-1">Produksi Terakhir</th>
                        <th scope="col">Harga Terakhir</th>
                        <th scope="col">Barang Selesai</th>
                        <th scope="col">Rusak</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="form-floating">
                                <select id="tableJenis" class="form-control selectpicker" data-live-search="true">
                                    <option selected>Pilih Jenis Produksi</option>
                                    <option>1231231</option>
                                    <option>54768</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-floating">
                                <select id="tableSubcon" class="form-control selectpicker" data-live-search="true">
                                    <option selected>Pilih Nama Subcon</option>
                                    <option>1231231</option>
                                    <option>54768</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <input id="tableJumlah" class="form-control" placeholder="Jumlah Produksi">
                        </td>
                        <td>
                            <input id="tableHarga" class="form-control" placeholder="Masukkan Harga">
                        </td>
                        <td>
                            <input id="tableProduksi.Terakhir" class="form-control" placeholder="Produksi Terakhir" disabled>
                        </td>
                        <td>
                            <input id="tableHarga.Terakhir" class="form-control" placeholder="Harga Terakhir" disabled>
                        </td>
                        <td>
                            <input id="tableQty" class="form-control" placeholder="Qty">
                        </td>
                        <td>
                            <input id="tableRusak" class="form-control" placeholder="Rusak" disabled>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success">Accept</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- /.container-fluid -->
        </div>

        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
@endsection