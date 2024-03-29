@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Surat Jalan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpengiriman') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelSuratJalan" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. SPK</th>
                            <th>No. Surat Jalan</th>
                            <th>Qty</th>
                            <th>Nama Penerima</th>
                            <th>Alamat Penerima</th>
                            <th>Penerimaan</th>
                            <th>Aksi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ctr = 1; ?>
                        @foreach ($pengiriman as $prm)
                            <tr>
                                <td>{{ $ctr }}</td>
                                <td>{{ $prm->no_spk }}</td>
                                <td>{{ $prm->no_surat_jalan }}</td>
                                <td>{{ $prm->qty }}</td>
                                <td>{{ $prm->nama_penerima }}</td>
                                <td>{{ $prm->alamat_penerima }}</td>
                                <td>
                                    <button type="button" class="btn btn-success"
                                        onclick="btnAcc('{{ $prm->no_spk }}');window.location.reload();"><i
                                            class="fas fa-check"></i></button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="btnDecline('{{ $prm->no_spk }}');window.location.reload();"><i
                                            class="fas fa-times"></i></button>
                                </td>
                                <td>

                                    <button type="button" onclick="btnedit({{ $prm }})" style="margin-right: 5px;" class="btn btn-warning"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-edit"></i>

                                        <form action="{{ url('suratjalan/delete/' . $prm->no_spk) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Edit Surat Jalan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form action="{{  url('/doEditSuratJalan') }}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="hidden" name="no_spk">
                                                            <label class="label">No. Surat Jalan</label>
                                                            <input class="form-control"
                                                                placeholder="Masukkan No. Surat Jalan"
                                                                name="no_surat_jalan" >

                                                            <label for="exampleFormControlTextarea1" class="label">Nama
                                                                Penerima</label>
                                                            <input class="form-control" placeholder="Masukkan Nama Penerima"
                                                                name="nama_penerima">

                                                            <label for="exampleFormControlTextarea1" class="label">Alamat
                                                                Penerima</label>
                                                            <input class="form-control"
                                                                placeholder="Masukkan Alamat Lengkap Penerima"
                                                                name="alamat_penerima">

                                                            <label for="exampleFormControlTextarea1"
                                                                class="label">Qty</label>
                                                            <input type="number" class="form-control"
                                                                placeholder="Masukkan Jumlah" name="qty">

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </td>

                                 @if ($prm->status_pengiriman ==1)
                                    <td>Diterima</td>
                                @else
                                    <td>Ditolak</td>
                                @endif
                            </tr>
                            <?php $ctr++; ?>
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
                    ctr: "AccPengiriman"
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
                    ctr: "DeclinePengiriman"
                },
                success: function(data) {

                }
            });
        }
        function btnedit(pengiriman)
        {
                $("[name='no_spk']").val(pengiriman['no_spk']);
                $("[name='no_surat_jalan']").val(pengiriman['no_surat_jalan']);
                $("[name='nama_penerima']").val(pengiriman['nama_penerima']);
                $("[name='alamat_penerima']").val(pengiriman['alamat_penerima']);
                $("[name='qty']").val(pengiriman['qty']);
            }
    </script>
    <!-- /.container-fluid -->
@endsection
