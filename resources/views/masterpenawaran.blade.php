@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penawaran</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpenawaran') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>

            </div>
            <div class="card-body">
                
                <table id="tabelFormPenawaran" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No. Penawaran</th>
                            <th>PIC</th>
                            <th>Jenis Box</th>
                            <th>Quantity</th>
                            <th>Jumlah Produksi</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Nett</th>
                            <th>Penerimaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penawaran as $prm)
                            <tr>
                                <td>{{ $prm->id_penawaran }}</td>
                                <td>{{ $prm->pic }}</td>
                                <td>{{ $prm->jenis_box }}</td>
                                <td>{{ $prm->qty }}</td>
                                <td>{{ $prm->jum_produksi }}</td>
                                <td>{{ $prm->harga_satuan }}</td>
                                <td>{{ $prm->diskon }}</td>
                                <td>{{ $prm->net }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" onclick="btnAcc('{{$prm->id_penawaran}}');"><i class="fas fa-check"></i></button>
                                    <button type="button" class="btn btn-danger"  onclick="btnDecline('{{$prm->id_penawaran}}');"><i class="fas fa-times"></i></button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
        function btnAcc(id){
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPenawaran"
                },
                success: function(data) {

                }
            });
        }
        function btnDecline(id){
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePenawaran"
                },
                success: function(data) {

                }
            });
        }
    </script>
    <!-- /.container-fluid -->
@endsection
