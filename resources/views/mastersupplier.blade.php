@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Supplier</h1>
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
                          <h5 class="modal-title" id="exampleModalLongTitle">Form Supplier</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                   
                                <label class="label" for="disabledTextInput">ID Supplier</label>
                                <input id="disabledTextInput" class="form-control" placeholder="ID Supplier" disabled>

                                <label class="label">Nama Pegawai</label>
                                <input class="form-control" placeholder="Masukkan Nama">

                                <label class="label">NPWP</label>
                                <input class="form-control" placeholder="Masukkan NPWP">

                                <label class="label">Alamat</label>
                                <input class="form-control" placeholder="Masukkan Alamat">

                                <label class="label">Provinsi</label>
                                <input class="form-control" placeholder="Masukkan Provinsi">

                                <label class="label">Kota</label>
                                <input class="form-control" placeholder="Masukkan Kota">

                                <label class="label">Kecamatan</label>
                                <input class="form-control" placeholder="Masukkan Kecamatan">

                                <label class="label">Kelurahan</label>
                                <input class="form-control" placeholder="Masukkan Kelurahan">

                                <label class="label">Kode Pos</label>
                                <input class="form-control" placeholder="Kode Pos">

                                <label class="label">No. Telp</label>
                                <input type="number" class="form-control" placeholder="Masukkan No. Telp">

                                <label class="label">Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email">

                                <label class="label">Item</label>
                                <input type="text" class="form-control" placeholder="Masukkan Item">
                                <label class="label">Nama Bank</label>
                                <input type="text" class="form-control" placeholder="Pilih Nama Bank">
                                <label class="label">No. Rekening</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening">
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
            <table id="tabelMasterSupplier" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Supplier</th>
                        <th>Nama</th>
                        <th>Item</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12321312</td>
                        <td>PT. ABC</td>
                        <td>Kertas</td>
                        <td>Jl. Darmo Indah X</td>
                        <td>08123456678</td>
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