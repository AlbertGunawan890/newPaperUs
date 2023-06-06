@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Arus Stok Barang</h1>
    </div>

    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Barang Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Barang Keluar</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card">
                <div class="card-header">
                    <a href={{ url('barangmasuk') }}>
                        <button type="button" class="btn btn-primary my-auto">
                            Tambah Data
                        </button>
                    </a>

                </div>
                <div class="card-body">

                    <table id="tabelBarangMasuk" class="table table-bordered table-no-wrap table-responsive"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Jumlah Masuk</th>
                                <th>Harga Satuan</th>
                                <th>Harga Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($arusmasukkeluar as $prm)
                            <tr>
                                <td>{{ $prm->namabarang }}</td>
                                <td>{{ $prm->jenisbarang }}</td>
                                <td>{{ $prm->jumlahmasuk }}</td>
                                <td>{{ $prm->hargasatuan }}</td>
                                <td>{{ $prm->hargatotal }}</td>
                                <td>
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
                                                        Edit Barang Masuk
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="label">Nama Barang</label>
                                                            <input class="form-control" name="tnama"
                                                                placeholder="Masukkan Nama Barang">

                                                            <label class="label">Jenis Barang</label>
                                                            <select data-live-search="true" name="tjenisbarang"
                                                                class="selectpicker form-control">
                                                                <option selected>Pilih Jenis Barang</option>
                                                                <option>Pisau</option>
                                                                <option>Plat</option>
                                                                <option>Kertas Sisa</option>
                                                                <option>Barang Lain-lain</option>
                                                            </select>

                                                            <label class="label">Jumlah Masuk</label>
                                                            <input class="form-control" onchange="hartot()"
                                                                name="tjumlah" placeholder="Masukkan Jumlah">

                                                            <label class="label">Harga Satuan</label>
                                                            <input class="form-control" onchange="hartot()"
                                                                name="tjumlahsatuan"
                                                                placeholder="Masukkan Harga Satuan">

                                                            <label class="label">Harga Total</label>
                                                            <input class="form-control" name="tjumlahtotal"
                                                                placeholder="Harga Total">

                                                            <label class="label">Lokasi Barang</label>
                                                            <input class="form-control" name="tlokasi"
                                                                placeholder="Masukkan Jumlah">

                                                            <label class="label">Keterangan</label>
                                                            <textarea class="form-control" name="tketerangan"
                                                                aria-label="With textarea"></textarea>
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
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card">
                <div class="card-header">
                    <a href={{ url('barangkeluar') }}>
                        <button type="button" class="btn btn-primary my-auto">
                            Tambah Data
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <table id="tabelBarangKeluar" class="table table-bordered table-no-wrap table-responsive"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Jumlah Masuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ABCDF</td>
                                <td>HURUF</td>
                                <td>100</td>
                                <td>
                                    <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                        data-toggle="modal" data-target="#exampleModal1">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Edit Barang Keluar
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="label">Nama Barang</label>
                                                            <input class="form-control"
                                                                placeholder="Masukkan Nama Barang">

                                                            <label class="label">Jenis Barang</label>
                                                            <select data-live-search="true"
                                                                class="selectpicker form-control">
                                                                <option selected>Pilih Jenis Barang</option>
                                                                <option>Pisau</option>
                                                                <option>Plat</option>
                                                                <option>Kertas Sisa</option>
                                                                <option>Barang Lain-lain</option>
                                                            </select>

                                                            <label class="label">Jumlah Keluar</label>
                                                            <input class="form-control" placeholder="Masukkan Jumlah">

                                                            <label class="label">Keterangan</label>
                                                            <textarea class="form-control"
                                                                aria-label="With textarea"></textarea>

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
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
