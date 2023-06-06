@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Pegawai</h1>
        </div>

        <div class="card">
            <div class="card-header">
              <a href={{ url('tambahpegawai') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                  </button>
                </a>

            </div>
            <div class="card-body">
            <form action="">
                @csrf

            </form>
            <table id="tabelMasterPegawai" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arrPegawai as $prm)
                    <tr>
                        <td>{{$prm->id_pegawai}}</td>
                        <td>{{$prm->nama_pegawai}}</td>
                        <td>{{$prm->alamat_pegawai}}</td>
                        <td>{{$prm->notelp_pegawai}}</td>
                        <td>{{$prm->email_pegawai}}</td>
                        <td>
                            <div style="display: flex;">
                                {{-- <form action="">
                                    @csrf --}}
                                <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                data-toggle="modal" data-target="#exampleModal" onclick="btnedit({{$prm}})">
                                <i class="fas fa-edit"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Edit Pegawai
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <form action="{{ url('/doEditpegawai') }}" method="post">
                                                @csrf
                                                    <div class="modal-body text-left">
                                                        <label class="label">ID Pegawai</label>
                                                        <input name="id_pegawai" class="form-control"
                                                            value="" readonly>

                                                        <label class="label">Nama Pegawai</label>
                                                        <input name="nama" class="form-control"
                                                            placeholder="Masukkan Nama Pegawai">

                                                        <label class="label">Alamat Pegawai</label>
                                                        <input name="alamat" class="form-control"
                                                            placeholder="Masukkan Alamat">

                                                        <label class="label">No. Telp</label>
                                                        <input name="notelp" class="form-control"
                                                            placeholder="Masukkan No. Telp">

                                                        <label class="label">Email Pegawai</label>
                                                        <input name="email" class="form-control"
                                                            placeholder="Masukkan email">
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
                                </form>
                                <form  action="{{ url('masterpegawai/delete/' . $prm->id_pegawai) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
        function btnedit(arrPegawai){
            $("[name='id_pegawai']").val(arrPegawai['id_pegawai']);
            $("[name='nama']").val(arrPegawai['nama_pegawai']);
            $("[name='alamat']").val(arrPegawai['alamat_pegawai']);
            $("[name='notelp']").val(arrPegawai['notelp_pegawai']);
            $("[name='email']").val(arrPegawai['email_pegawai']);
        }
    </script>
    <!-- /.container-fluid -->
@endsection
