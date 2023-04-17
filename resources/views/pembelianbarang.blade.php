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
                <table id="tabelPembelianBarang" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
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
                        <tr>
                            <td>ABCDF</td>
                            <td>HURUF</td>
                            <td>XYZ</td>
                            <td>20</td>
                            <td>20000</td>
                            <td>2000</td>
                            <td>18000</td>
                            <td>
                                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>

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
    

@endsection
