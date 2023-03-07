@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Barang Keluar</h1>
        </div>
        <div class="form-group">
            <label class="label">Nama Barang</label>
            <input class="form-control" placeholder="Masukkan Nama Barang">

            <label class="label">Jenis Barang</label>
            <input class="form-control" placeholder="Masukkan Jenis Barang">

            <label class="label">Jumlah Keluar</label>
            <input class="form-control" placeholder="Masukkan Jumlah">

            <label class="label">Keterangan</label>
            <textarea class="form-control" aria-label="With textarea"></textarea>

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
@endsection