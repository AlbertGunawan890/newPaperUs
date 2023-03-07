@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Box</h1>
    </div>
    <div class="form-group">
                                   
        <label class="label" for="disabledTextInput">Tipe Box</label>
        <input id="disabledTextInput" class="form-control" placeholder="Masukkan Tipe Box">

        <label class="label">Nama</label>
        <input class="form-control" placeholder="Masukkan Nama Box">

        <label class="label">Panjang</label>
        <input class="form-control" placeholder="Panjang (cm)">

        <label class="label">Lebar</label>
        <input class="form-control" placeholder="Lebar (cm)">

        <label class="label">Tinggi</label>
        <input class="form-control" placeholder="Tinggi (cm)">

        <label class="label">Keterangan</label>
        <textarea class="form-control" aria-label="With textarea"></textarea>
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection