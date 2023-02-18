@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Desain</h1>
        </div>

        <div class="container" style="float: left;">
            <div class="form-group">
                <div class="row">
                    <div class="col-10">
                        <label class="label" for="disabledTextInput">ID Penawaran</label>
                        <input id="idPenawaran" class="form-control" placeholder="ID Penawaran" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <label class="label">Link Desain</label>
                        <input id="linkDesain" class="form-control" placeholder="Masukkan Link Desain">
                    </div>
                    <div class="col-1">
                        <div class="form-check" style="margin-top: 40px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label id="desainAccept" class="form-check-label" for="flexCheckDefault">
                                Accept
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="exampleFormControlTextarea1" class="label">Keterangan</label>
                        <textarea id="ketDesain" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary my-3 ">Submit</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection