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
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
