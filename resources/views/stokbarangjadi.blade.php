@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Stok Barang Jadi</h1>
        </div>

        <div class="card">
            <div class="card-body">
            
            <table id="tabelStokBarangJadi" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Brand</th>
                        <th>PIC</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Quantity</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>B7FD-8E</td>
                        <td>Example</td>
                        <td>Adi Adi</td>
                        <td>Box 10x10cm</td>
                        <td>Rp5000</td>
                        <td>250</td>
                        <td>27-02-2023</td>
                        <td>
                            <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Edit Stok Barang Jadi
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>B8FD-1E</td>
                        <td>Exam</td>
                        <td>Adi acil</td>
                        <td>Box 20x10cm</td>
                        <td>Rp7000</td>
                        <td>250</td>
                        <td>26-02-2023</td>
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
