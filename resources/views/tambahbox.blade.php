@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Box</h1>
    </div>
    @if ($errors->any())
    @foreach ($errors->all() as $err)
        <div class="alert alert-danger">{{ $err }}</div>
    @endforeach
@endif
    <form action="{{ url('/doAddbox') }}" method="post">
        @csrf
        <div class="form-group">

            <label class="label" for="readonlyTextInput">Tipe Box</label>
            <input id="readonlyTextInput" class="form-control" placeholder="Masukkan Tipe Box" name ="tipe_box">

            <label class="label">Nama</label>
            <input class="form-control" placeholder="Masukkan Nama Box"name ="namabox">

            <label class="label">Panjang</label>
            <input class="form-control" placeholder="Panjang (cm)"name ="panjang">

            <label class="label">Lebar</label>
            <input class="form-control" placeholder="Lebar (cm)"name ="lebar">

            <label class="label">Tinggi</label>
            <input class="form-control" placeholder="Tinggi (cm)"name ="tinggi">

            <label class="label">Keterangan</label>
            <textarea class="form-control" aria-label="With textarea"name ="keterangan"></textarea>

            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
