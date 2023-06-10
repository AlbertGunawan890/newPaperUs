@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Customer</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahcustomer') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
                <div style="margin-top:20px;">
                    <form method="post" action="{{ url('/importCustomer') }}" enctype="multipart/form-data">
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

                <table id="tabelMasterCustomer" class="table table-bordered table-no-wrap table-responsive"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Customer</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arrCustomer as $prm)
                            <tr>
                                <td>{{ $prm->id_customer }}</td>
                                <td>{{ $prm->nama_customer }}</td>
                                <td>{{ $prm->alamat_customer }}</td>
                                <td>{{ $prm->notelp_customer }}</td>
                                <td>{{ $prm->email_customer }}</td>
                                <td>
                                    <div style="display: flex">
                                        <!-- Button trigger modal -->
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
                                                            Edit Customer
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    {{-- EDIT CUSTOMER POP UP --}}
                                                    <div class="form-group">
                                                        <form action="{{ url('/doEditcustomer') }}" method="post">
                                                            @csrf
                                                            <div class="modal-body text-left">
                                                                <label class="label">ID Customer</label>
                                                                <input name="id_customer" class="form-control"
                                                                    value="" readonly>

                                                                <label class="label">Nama Customer</label>
                                                                <input name="nama" class="form-control"
                                                                    placeholder="Masukkan Nama Customer">

                                                                <label class="label">Alamat Customer</label>
                                                                <input name="alamat" class="form-control"
                                                                    placeholder="Masukkan Alamat">

                                                                <label class="label">No. Telp</label>
                                                                <input name="notelp" class="form-control"
                                                                    placeholder="Masukkan No. Telp">

                                                                <label class="label">Email Customer</label>
                                                                <input name="email" class="form-control"
                                                                    placeholder="Masukkan email">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <input type="submit" value="Update"
                                                                    class="btn btn-primary">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    {{-- EDIT CUSTOMER POP UP --}}

                                                </div>
                                            </div>
                                        </div>
                                        <form method="post"
                                            action="{{ url('mastercustomer/delete/' . $prm->id_customer) }}">
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
        function btnedit(arrCustomer) {
            $("[name='id_customer']").val(arrCustomer['id_customer']);
            $("[name='nama']").val(arrCustomer['nama_customer']);
            $("[name='alamat']").val(arrCustomer['alamat_customer']);
            $("[name='notelp']").val(arrCustomer['notelp_customer']);
            $("[name='email']").val(arrCustomer['email_customer']);
        }
    </script>

    <!-- /.container-fluid -->
@endsection
