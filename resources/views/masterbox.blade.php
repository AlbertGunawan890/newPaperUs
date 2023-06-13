@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Box</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahbox') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
                <a href="/public/master_box.xlsx" download>
                    <button type="button" class="btn btn-warning my-auto">
                        Template
                    </button>
                  </a>
                <div style="margin-top:20px;">
                    <form method="post" action="{{ url('/importBox') }}" enctype="multipart/form-data">
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

                <table id="tabelMasterBox" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tipe Box</th>
                            <th>Nama</th>
                            <th>Panjang</th>
                            <th>Lebar</th>
                            <th>Tinggi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arrBox as $prm)
                            <tr>

                                <td>{{ $prm->tipe_box }}</td>
                                <td>{{ $prm->nama_box }}</td>
                                <td>{{ $prm->panjang_box }}</td>
                                <td>{{ $prm->lebar_box }}</td>
                                <td>{{ $prm->tinggi_box }}</td>
                                <td>
                                    <div style="display: flex;">
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
                                                            Edit Box
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form action="{{ url('/doEditbox') }}" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="label" for="TextInput">ID
                                                                    Box</label>
                                                                <input id="TextInput" class="form-control"
                                                                    placeholder="Masukkan ID Box" name="id_box" readonly>
                                                                <label class="label" for="TextInput">Tipe
                                                                    Box</label>
                                                                <input id="TextInput" class="form-control"
                                                                    placeholder="Masukkan Tipe Box" name="tipe_box">

                                                                <label class="label">Nama</label>
                                                                <input class="form-control"
                                                                    placeholder="Masukkan Nama Box" name="namabox">

                                                                <label class="label">Panjang</label>
                                                                <input class="form-control"
                                                                    placeholder="Panjang (cm)"name="panjang">

                                                                <label class="label">Lebar</label>
                                                                <input class="form-control"
                                                                    placeholder="Lebar (cm)"name="lebar">

                                                                <label class="label">Tinggi</label>
                                                                <input class="form-control"
                                                                    placeholder="Tinggi (cm)"name="tinggi">

                                                                <label class="label">Keterangan</label>
                                                                <textarea class="form-control" aria-label="With textarea"name="keterangan"></textarea>
                                                            </div>

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
                                        <form action="{{ url('masterbox/delete/' . $prm->id_box) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i
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
    <!-- /.container-fluid -->
    <script>
        function btnedit(arrBox) {
            // var prm = 0;
            $("[name='id_box']").val(arrBox['id_box']);
            $("[name='tipe_box']").val(arrBox['tipe_box']);
            $("[name='namabox']").val(arrBox['nama_box']);
            $("[name='panjang']").val(arrBox['panjang_box']);
            $("[name='lebar']").val(arrBox['lebar_box']);
            $("[name='tinggi']").val(arrBox['tinggi_box']);
        }
    </script>
@endsection
