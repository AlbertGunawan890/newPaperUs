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
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Barang Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Barang Keluar</a>
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
                        <table id="tabelBarangMasuk" class="table table-bordered table-no-wrap" style="width:100%">
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
                                <tr>
                                    <td>ABCDF</td>
                                    <td>HURUF</td>
                                    <td>100</td>
                                    <td>Rp10.000</td>
                                    <td>Rp1.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
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
                        <table id="tabelBarangKeluar" class="table table-bordered table-no-wrap" style="width:100%">
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
                                        <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
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