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
                <button type="button" class="btn btn-primary my-auto" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Data
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Form Surat Jalan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                   
                                <label class="label" for="disabledTextInput">No. SPK</label>
                                <input id="disabledTextInput" class="form-control" placeholder="No. SPK" disabled>

                                <label class="label">No. Surat Jalan</label>
                                <input class="form-control" placeholder="Masukkan No. Surat Jalan">
                            
                                <label for="exampleFormControlTextarea1" class="label">No. Kendaraan</label>
                                <input class="form-control" placeholder="Masukkan No. Kendaraan">

                                <label for="exampleFormControlTextarea1" class="label">Nama Pengirim</label>
                                <input class="form-control" placeholder="Masukkan No. Kendaraan">

                                <label for="exampleFormControlTextarea1" class="label">Tanggal</label>
                                <input type="date" class="form-control" placeholder="Pilih Tanggal">
                            
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
            <table id="tabelSuratJalan" class="table table-bordered table-no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. SPK</th>
                        <th>No. Surat Jalan</th>
                        <th>Surat Jalan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12321312</td>
                        <td>242324</td>
                        <td>https://datatables.net/examples/styling/bootstrap5.html</td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12321312</td>
                        <td>242324</td>
                        <td>https://datatables.net/examples/styling/bootstrap5.html</td>
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