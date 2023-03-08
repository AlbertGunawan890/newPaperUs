@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Desain dan Pisau</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">No. Penawaran</label>
        <input id="disabledTextInput" class="form-control" placeholder="ID Penawaran" disabled>

        <label class="label">Customer</label>
        <input class="form-control" placeholder="Pilih Customer">

        <label class="label">Jenis Box</label>
        <input class="form-control" placeholder="Jenis Box">

        <label class="label">Link Desain</label>
        <input class="form-control" placeholder="Link Desain">

        <label class="label">Jenis Pisau</label>
        <input class="form-control" placeholder="Jenis Pisau">

        <label for="exampleFormControlTextarea1" class="label">Jenis Plat</label>
        <input class="form-control" placeholder="Jenis Plat">
    
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</div>
@endsection