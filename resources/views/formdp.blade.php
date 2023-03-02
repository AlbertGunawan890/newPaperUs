@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form DP / Pembayaran</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary my-auto" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Data
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Form DP/Pembayaran</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                   
                                <label class="label" for="disabledTextInput">No. Penawaran</label>
                                <input id="disabledTextInput" class="form-control" placeholder="No. SPK" disabled>

                                <label class="label">Customer</label>
                                <input class="form-control" placeholder="Pilih Customer">
                            
                                <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
                                <input class="form-control" placeholder="Jenis Box">

                                <label for="exampleFormControlTextarea1" class="label">Quantity</label>
                                <input type="number" class="form-control" placeholder="Masukkan Quantity">

                                <label for="exampleFormControlTextarea1" class="label">Jumlah Produksi</label>
                                <input type="number" class="form-control" placeholder="Masukkan Jumlah">

                                <label for="exampleFormControlTextarea1" class="label">Harga</label>
                                <input type="number" class="form-control" placeholder="Masukkan Harga">

                                <label for="exampleFormControlTextarea1" class="label">Pembayaran</label>
                                <input class="form-control" placeholder="Masukkan pembayaran">

                                <label for="exampleFormControlTextarea1" class="label">Sisa</label>
                                <input class="form-control" placeholder="Masukkan sisa">

                                <label for="exampleFormControlTextarea1" class="label">Termin Pembayaran</label>
                                <input class="form-control" placeholder="Masukkan termin pembayaran">
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
            <table id="tabelFormDP" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Penawaran</th>
                        <th>Nama Customer</th>
                        <th>Pembayaran</th>
                        <th>Sisa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234</td>
                        <td>Pak Bambang</td>
                        <td>Rp300.000</td>
                        <td>Rp.450.000</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2345</td>
                        <td>Sugiono</td>
                        <td>Rp500.000</td>
                        <td>Rp300.000</td>
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
    <!-- /.container-fluid -->
    @endsection