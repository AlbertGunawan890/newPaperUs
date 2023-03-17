@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Login</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href="#">
                    <button type="button" class="btn btn-primary my-auto">Import</button>
                    <button type="button" class="btn btn-primary my-auto">Export</button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelLogin" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Waktu</th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>31/12/23 17:00:01</td>
                            <td>Andi</td>
                            <td>Admin</td>
                            <td>Lorem Ipsum Lorem Ipsum Lorem Ipsum </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection