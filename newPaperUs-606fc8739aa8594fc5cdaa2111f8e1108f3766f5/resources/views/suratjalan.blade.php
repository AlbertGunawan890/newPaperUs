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
                    </tr>
                </thead>
                <tbody>
                    <?php $ctr = 1; ?>
                    @foreach ($pengiriman as $prm)
                    <tr>
                        <td>{{$ctr}}</td>
                        <td>{{$prm->no_spk}}</td>
                        <td>{{$prm->no_surat_jalan}}</td>
                        <td>{{$prm->qty}}</td>
                        <td>{{$prm->nama_penerima}}</td>
                        <td>{{$prm->alamat_penerima}}</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php $ctr++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection
