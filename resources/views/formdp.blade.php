@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form DP / Pembayaran</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <a href={{ url('tambahdp') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                </button>
            </a>


        </div>
        <div class="card-body">

            <table id="tabelFormDP" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Penawaran</th>
                        <th>PIC</th>
                        <th>Pembayaran</th>
                        <th>Sisa</th>
                        <th>Penerimaan</th>
                        <th>Aksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $prm)
                    <tr>
                        <td>{{$prm->id_penawaran}}</td>
                        <td>{{$prm->pic}}</td>
                        <td>{{$prm->pembayaran}}</td>
                        <td>{{$prm->sisa}}</td>
                        <td>
                            <button type="button" class="btn btn-success"
                                onclick="btnAcc('{{$prm->id_pembayaran}}');window.location.reload();"><i
                                    class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"
                                onclick="btnDecline('{{$prm->id_pembayaran}}');window.location.reload();"><i
                                    class="fas fa-times"></i></button>
                        </td>
                        <td>
                            <div style="display: flex">
                                <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Edit DP / Pembayaran
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="label">Nama Brand</label>
                                                        <input class="form-control" name="nama_brand"
                                                            placeholder="Masukkan Nama Brand">

                                                        <label class="label">Nama PIC</label>
                                                        <input class="form-control" name="pic"
                                                            placeholder="Masukkan Nama PIC">

                                                        <label for="exampleFormControlTextarea1" class="label">Jenis
                                                            Box</label>
                                                        <input class="form-control" name="jenis_box"
                                                            placeholder="Jenis Box">

                                                        <label for="exampleFormControlTextarea1"
                                                            class="label">Quantity</label>
                                                        <input type="number" class="form-control" name="qty"
                                                            placeholder="Masukkan Quantity">

                                                        <label for="exampleFormControlTextarea1" class="label">Jumlah
                                                            Produksi</label>
                                                        <input type="number" class="form-control" name="jum_produksi"
                                                            placeholder="Masukkan Jumlah">

                                                        <label for="exampleFormControlTextarea1"
                                                            class="label">Harga</label>
                                                        <input type="number" class="form-control" name="harga"
                                                            placeholder="Masukkan Harga">

                                                        <label for="exampleFormControlTextarea1"
                                                            class="label">Pembayaran</label>
                                                        <input class="form-control" name="pembayaran"
                                                            onchange="sisaPembayaran()"
                                                            placeholder="Masukkan Pembayaran">

                                                        <label for="exampleFormControlTextarea1"
                                                            class="label">Sisa</label>
                                                        <input class="form-control" name="sisa"
                                                            placeholder="Masukkan Sisa">

                                                        <label for="exampleFormControlTextarea1" class="label">Termin
                                                            Pembayaran</label>
                                                        <input class="form-control" type="date" name="termin"
                                                            value="<?php echo date('Y-m-d'); ?>"
                                                            placeholder="Masukkan Termin Pembayaran">

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="{{ url('formdp/delete/' . $prm->id_pembayaran) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                        @if ($prm->status_pembayaran == '1')
                        <td>Diterima</td>
                        @else
                        <td>Ditolak</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <script>
            function btnAcc(id) {
                $.ajax({
                    url: "autocomplete.php",
                    method: "POST",
                    data: {
                        query: id,
                        ctr: "AccPembayaran"
                    },
                    success: function (data) {

                    }
                });
            }

            function btnDecline(id) {
                $.ajax({
                    url: "autocomplete.php",
                    method: "POST",
                    data: {
                        query: id,
                        ctr: "DeclinePembayaran"
                    },
                    success: function (data) {

                    }
                });
            }

        </script>
    </div>
    <!-- /.container-fluid -->
    @endsection
