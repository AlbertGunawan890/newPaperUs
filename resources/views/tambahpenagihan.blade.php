@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Penagihan / Invoicing</h1>
    </div>
    <div class="form-group">

        <label class="label" for="readonlyTextInput">No. Penawaran</label>
        <input id="readonlyTextInput" class="form-control" placeholder="No. Penawaran" readonly>

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

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection
