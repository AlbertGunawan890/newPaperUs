@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penawaran</h1>
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
                          <h5 class="modal-title" id="exampleModalLongTitle">Form Penawaran</h5>
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

                                <label for="exampleFormControlTextarea1" class="label">Diskon</label>
                                <input class="form-control" placeholder="Masukkan Diskon">

                                <label for="exampleFormControlTextarea1" class="label">Nett</label>
                                <input class="form-control">
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
            <table id="tabelFormPenawaran" class="table table-bordered table-no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Penawaran</th>
                        <th>Nama Customer</th>
                        <th>Jenis Box</th>
                        <th>Quantity</th>
                        <th>Jumlah Produksi</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Nett</th>
                        <th>Penerimaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456</td>
                        <td>Bambang bambang</td>
                        <td>10x10cm</td>
                        <td>10000</td>
                        <td>3000</td>
                        <td>Rp10.000</td>
                        <td>5%</td>
                        <td>Rp95.000</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>Andi Wijaya</td>
                        <td>20x10cm</td>
                        <td>3000</td>
                        <td>1000</td>
                        <td>Rp5.000</td>
                        <td>20%</td>
                        <td>Rp4.000</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
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