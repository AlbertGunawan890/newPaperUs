@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Desain dan Pisau</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">ID Penawaran</label>
        <input id="disabledTextInput" class="form-control" placeholder="ID Penawaran" disabled>

        <label class="label">Link Desain</label>
        <input class="form-control" placeholder="Masukkan Link Desain">
    
        <label for="exampleFormControlTextarea1" class="label">Keterangan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</div>
@endsection