@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Desain</h1>
        </div>

        <div class="card">
            <div class="card-header">
              <a href={{ url('tambahdesain') }}>
                <button type="button" class="btn btn-primary my-auto">
                    Tambah Data
                  </button>
                </a>
            </div>
            <div class="card-body">
            <table id="tabelFormDesain" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Penawaran</th>
                        <th>Link Desain</th>
                        <th>Keterangan</th>
                        <th style="min-width: 250px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12321312</td>
                        <td>https://datatables.net/examples/styling/bootstrap5.html</td>
                        <td>Tes</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Reject</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Accept</label>
                              </div>
                              <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                              <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>12321312</td>
                        <td>https://datatables.net/examples/styling/bootstrap5.html</td>
                        <td>deus</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Reject</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Accept</label>
                              </div>
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