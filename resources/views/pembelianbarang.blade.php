@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pembelian Barang</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <a href={{ url('tambahpembelian') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                </button>
            </a>
        </div>
        <div class="card-body">
            <table id="tabelPembelianBarang" class="table table-bordered table-no-wrap table-responsive"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Supplier</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Nett</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($arrpembelianbarang as $prm)
                    <tr>
                        <td> {{ $prm->namabarang }} </td>
                        <td>{{ $prm->jenisbarang }}</td>
                        <td>{{ $prm->supplier }}</td>
                        <td>{{ $prm->jumlah }}</td>
                        <td>{{ $prm->harga }}</td>
                        <td>{{ $prm->diskon }}</td>
                        <td>{{ $prm->nett }}</td>
                        <td>
                            <div style="display: flex;">
                                <form action="">
                                    @csrf
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
                                                        Edit Pembelian Barang
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="label" form="readonlyTextInput">Tipe
                                                                Box</label>
                                                            <input id="readonlyTextInput" class="form-control"
                                                                name="ttipebox" placeholder="Masukkan Tipe Box">

                                                            <label class="label">Nama Barang</label>
                                                            <input class="form-control" placeholder="Masukkan Nama Box"
                                                                name="tnamabarang">

                                                            <label class="label">Jenis Barang</label>
                                                            <input class="form-control" placeholder="Jenis Barang"
                                                                name="tjenisbarang">

                                                            <label class="label">Supplier</label>
                                                            <input class="form-control" placeholder="supplier"
                                                                name="tsupplier">

                                                            <label class="label">Jumlah</label>
                                                            <input class="form-control" placeholder="jumlah"
                                                                onchange="totalnett()" name="tjumlah">

                                                            <label class="label">Harga</label>
                                                            <input type="number" class="form-control"
                                                                onchange="totalnett()" placeholder="Masukkan Harga"
                                                                name="tharga">

                                                            <label class="label">Diskon</label>
                                                            <input type="number" class="form-control"
                                                                onchange="totalnett()" placeholder="Masukkan Diskon"
                                                                name="tdiskon">

                                                            <label class="label">Nett</label>
                                                            <input type="number" class="form-control" placeholder="Nett"
                                                                name="tnett">
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
                                </form>
                                <form action="{{ url('/pembelianbarang/delete/' . $prm->namabarang) }}" method="POST">
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


@endsection
