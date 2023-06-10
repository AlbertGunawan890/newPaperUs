@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Vendor</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahvendor') }}>
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
            </div>
            <div class="card-body">
                <table id="tabelMasterVendor" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Vendor</th>
                            <th>Nama Vendor</th>
                            <th>Jenis Item</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($arrVendor as $prm)
                            <tr>
                                <td>{{ $prm->id_vendor }}</td>
                                <td>{{ $prm->nama_vendor }}</td>
                                <td>{{ $prm->jenis_item }}</td>
                                <td>{{ $prm->kategori_vendor }}</td>
                                <td>{{ $prm->alamat_vendor }}</td>
                                <td>
                                    <div style="display: flex">
                                        <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                            data-toggle="modal" data-target="#exampleModal"
                                            onclick="btnedit({{ $prm }})">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Edit Vendor
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">

                                                        <div class="form-group">
                                                            <form
                                                                action="{{ url('/doEditvendor') }}"
                                                                method="post">
                                                                @csrf
                                                                <label class="label">ID Vendor</label>
                                                                <input name="id_vendor" class="form-control"
                                                                    value="" readonly>
                                                                <label class="label">Nama Vendor</label>
                                                                <input class="form-control"
                                                                    placeholder="Masukkan Nama Vendor" name="nama">

                                                                <label class="label">Jenis Item</label>
                                                                <input class="form-control"
                                                                    placeholder="Masukkan Jenis Item" name="jenis_item">

                                                                <label class="label">Kategori</label>
                                                                <input class="form-control" placeholder="Masukkan Kategori"
                                                                    name="kategori">

                                                                <label class="label">Alamat</label>
                                                                <input class="form-control" placeholder="Masukkan Alamat"
                                                                    name="alamat">

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" onclick="btnedit()"
                                                                        class="btn btn-primary">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" action="{{ url('/mastervendor/delete/' . $prm->id_vendor) }}">
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
        <!-- /.container-fluid -->
        <script>
            function btnedit(arrVendor) {
                // var prm = 0;
                $("[name='id_vendor']").val(arrVendor['id_vendor']);
                $("[name='nama']").val(arrVendor['nama_vendor']);
                $("[name='jenis_item']").val(arrVendor['jenis_item']);
                $("[name='kategori']").val(arrVendor['kategori_vendor']);
                $("[name='alamat']").val(arrVendor['alamat_vendor']);
            }
        </script>
    @endsection
