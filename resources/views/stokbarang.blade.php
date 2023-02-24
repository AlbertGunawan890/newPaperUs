@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Stok Barang</h1>
        </div>

        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pisau</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Barang lain-lain</a>
            </li>
            
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card">
                </div>
                <div class="card-body">
                    <table id="tabelStokBarangA" class="table table-bordered table-no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Lokasi Barang</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12321312</td>
                                <td>ABCDEFGH</td>
                                <td>100.000</td>
                                <td>200</td>
                                <td>20A</td>
                                <td>12/12/12</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="card-body">
                <table id="tabelStokBarangB" class="table table-bordered table-no-wrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Lokasi Barang</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12321312</td>
                            <td>Example</td>
                            <td>20.000</td>
                            <td>100</td>
                            <td>AA10</td>
                            <td>10/01/23</td>
                        </tr>
                        
                    </tbody>
                </table>
        </div></div>
            
          </div>
        
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection