@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Supplier</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahsupplier') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
                <div style="margin-top:20px;">
                    <form method="post" action="{{ url('/import') }}" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            </div>
                            <div class="modal-body">

                                {{ csrf_field() }}

                                <label>Pilih file excel</label>
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </form>
                   </div>
            </div>
            <div class="card-body">
                <table id="tabelMasterSupplier" class="table table-bordered table-no-wrap table-responsive"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Supplier</th>
                            <th>Nama</th>
                            <th>Item</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arrSupplier as $prm)
                            <tr>

                                <td>{{ $prm->id_supplier }}</td>
                                <td>{{ $prm->nama_supplier }}</td>
                                <td>{{ $prm->item }}</td>
                                <td>{{ $prm->alamat_supplier }}</td>
                                <td>{{ $prm->notelp_supplier }}</td>
                                <td>
                                    <div style="display: flex;">
                                        <!-- Button trigger modal -->
                                        <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                            data-toggle="modal" data-target="#exampleModal" onclick="btnedit({{ $prm }})">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Edit Supplier
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="form-group">
                                                        <form action="{{ url('/doEditsupplier') }}" method="post">
                                                            @csrf
                                                            <div class="modal-body text-left">
                                                                <label class="label">ID Supplier</label>
                                                                <input name="id_supplier" class="form-control"
                                                                    value="" readonly>

                                                                <label class="label">Nama Supplier</label>
                                                                <input name="nama" class="form-control"
                                                                    placeholder="Masukkan Nama Supplier">

                                                                <label class="label">Item</label>
                                                                <input name="item" class="form-control"
                                                                    placeholder="Masukkan Item">

                                                                <label class="label">Alamat Supplier</label>
                                                                <input name="alamat" class="form-control"
                                                                    placeholder="Masukkan Alamat">

                                                                <label class="label">No. Telp Supplier</label>
                                                                <input name="notelp" class="form-control"
                                                                    placeholder="Masukkan No. Telp">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <input type="submit" value="Update" class="btn btn-primary">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ url('mastersupplier/delete/' . $prm->id_supplier) }}" method="POST">
                                            @csrf
                                            <button style="margin-left: 5px;" type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script>
        function btnedit(arrSupplier) {
            // var prm = 0;
            $("[name='id_supplier']").val(arrSupplier['id_supplier']);
            $("[name='nama']").val(arrSupplier['nama_supplier']);
            $("[name='item']").val(arrSupplier['item']);
            $("[name='alamat']").val(arrSupplier['alamat_supplier']);
            $("[name='notelp']").val(arrSupplier['notelp_supplier']);
        }
    </script>

    <!-- /.container-fluid -->
@endsection

