@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Box</h1>
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
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Box Model</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                   
                                <label class="label" for="disabledTextInput">Tipe Box</label>
                                <input id="disabledTextInput" class="form-control" placeholder="Masukkan Tipe Box">

                                <label class="label">Nama</label>
                                <input class="form-control" placeholder="Masukkan Nama Box">

                                <label class="label">Panjang</label>
                                <input class="form-control" placeholder="Panjang (cm)">

                                <label class="label">Lebar</label>
                                <input class="form-control" placeholder="Lebar (cm)">

                                <label class="label">Tinggi</label>
                                <input class="form-control" placeholder="Tinggi (cm)">

                                <label class="label">Keterangan</label>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
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
                <table id="tabelMasterCustomer" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tipe Box</th>
                            <th>Nama</th>
                            <th>Panjang</th>
                            <th>Lebar</th>
                            <th>Tinggi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12321312</td>
                            <td>ABCDEFGH</td>
                            <td>10</td>
                            <td>20</td>
                            <td>20</td>
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