@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penagihan</h1>
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
                          <h5 class="modal-title" id="exampleModalLongTitle">Form Penagihan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                   
                                <label class="label" for="disabledTextInput">No. Penawaran</label>
                                <input id="disabledTextInput" class="form-control" placeholder="No. Penawaran" disabled>

                                <label class="label">Customer</label>
                                <input class="form-control" placeholder="Pilih Customer">
                            
                                <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
                                <input class="form-control" placeholder="Pilih Jenis Box">

                                <label for="exampleFormControlTextarea1" class="label">Jumlah</label>
                                <input class="form-control" placeholder="Jumlah">

                                <label for="exampleFormControlTextarea1" class="label">Nominal</label>
                                <input type="number" class="form-control" placeholder="Nominal">

                                <label for="exampleFormControlTextarea1" class="label">Sudah Terbayar</label>
                                <input type="number" class="form-control">

                                <label for="exampleFormControlTextarea1" class="label">Sisa Hutang</label>
                                <input type="number" class="form-control">

                                <label for="exampleFormControlTextarea1" class="label">Jumlah Bayar</label>
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
            <table id="tabelPenagihan" class="table table-bordered table-no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Penawaran</th>
                        <th>Customer</th>
                        <th>Jenis Box</th>
                        <th>Jumlah</th>
                        <th>Nominal</th>
                        <th>Sisa Hutang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12321312</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>300000</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>12321312</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>242324</td>
                        <td>400000</td>
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