@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Vendor</h1>
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
                          <h5 class="modal-title" id="exampleModalLongTitle">Form Vendor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                   
                                <label class="label" for="disabledTextInput">ID Vendor</label>
                                <input id="disabledTextInput" class="form-control" placeholder="ID Customer" disabled>

                                <label class="label">Nama Vendor</label>
                                <input class="form-control" placeholder="Masukkan Nama Vendor">

                                <label class="label">Jenis Item</label>
                                <input class="form-control" placeholder="Masukkan Jenis Item">

                                <label class="label">Kategori</label>
                                <input class="form-control" placeholder="Masukkan Kategori">

                                <label class="label">Alamat</label>
                                <input class="form-control" placeholder="Masukkan Provinsi">

                                <label class="label">Kota</label>
                                <input class="form-control" placeholder="Masukkan Kota">

                                <label class="label">Kecamatan</label>
                                <input class="form-control" placeholder="Masukkan Kecamatan">

                                <label class="label">Kelurahan</label>
                                <input class="form-control" placeholder="Masukkan Kelurahan">

                                <label class="label">Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email">

                                <label class="label">Nama Bank</label>
                                <input class="form-control" placeholder="Masukkan Nama Bank">

                                <label class="label">No. Akun</label>
                                <input class="form-control" placeholder="Masukkan No. Akun">

                                <label class="label">No. Rekening</label>
                                <input class="form-control" placeholder="Masukkan No. Rek">

                                <label class="label">Batasan Hutang</label>
                                <input type="number" class="form-control">

                                <label class="label">Hutang Sekarang</label>
                                <input type="number" class="form-control">

                                <label class="label">Hutang Tersedia</label>
                                <input type="number" class="form-control">

                                <label class="label">Sisa Hutang</label>
                                <input type="number" class="form-control">

                                <label class="label">Metode Pembayaran</label>
                                <input type="number" class="form-control">                            
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
                <table id="tabelMasterVendor" class="table table-bordered table-no-wrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Vendor</th>
                            <th>Nama Vendor</th>
                            <th>Jenis Item</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12321312</td>
                            <td>ABCDEFGH</td>
                            <td>Accessories</td>
                            <td>example</td>
                            <td>example@example.com</td>
                            <td>
                                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                          <td>12321312</td>
                          <td>ABCDEFGH</td>
                          <td>Accessories</td>
                          <td>example</td>
                          <td>example@example.com</td>
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