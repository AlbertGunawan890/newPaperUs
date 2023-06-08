@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penagihan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpenagihan') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelPenagihan" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No. Penawaran</th>
                            <th>Customer</th>
                            <th>Jenis Box</th>
                            <th>Jumlah</th>
                            <th>Nominal</th>
                            <th>Sisa Hutang</th>
                            <th>Penerimaan</th>
                            <th>Aksi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penagihan as $prm)
                        <tr>
                                <td>{{ $prm->id_penawaran }}</td>
                                <td>{{ $prm->pic }}</td>
                                <td>{{ $prm->jenis_box }}</td>
                                <td>{{ $prm->jumlah }}</td>
                                <td>{{ $prm->nominal }}</td>
                                <td>{{ $prm->sisa_hutang }}</td>
                                <td>
                                    <button type="button" class="btn btn-success"
                                    onclick="btnAcc('{{ $prm->id_penawaran }}');window.location.reload();"><i
                                        class="fas fa-check"></i></button>
                                <button type="button" class="btn btn-danger"
                                    onclick="btnDecline('{{ $prm->id_penawaran }}');window.location.reload();"><i
                                        class="fas fa-times"></i></button>
                                </td>
                                <td>
                                    <div style="display: flex">
                                        <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ url('penagihan/delete/' . $prm->id_penagihan) }}"method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>

                                    </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Edit Penagihan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">
                                                        @csrf
                                                        <label class="label" for="readonlyTextInput">No. Penawaran</label>
                                                        <select data-live-search="true" class="selectpicker form-control" name="id_penawaran"
                                                            onchange="nama_brand_change()">
                                                            <option selected>Pilih No. Penawaran</option>
                                                            @foreach ($penagihan as $prm)
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

                                </td>
                                @if ($prm->status_penagihan == '1')
                                <td>Diterima</td>
                            @else
                                <td>Ditolak</td>
                            @endif
                        </tr>
                    </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script>
        function btnAcc(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPenagihan"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePenagihan"
                },
                success: function(data) {

                }
            });
        }
    </script>
    <!-- /.container-fluid -->
@endsection
