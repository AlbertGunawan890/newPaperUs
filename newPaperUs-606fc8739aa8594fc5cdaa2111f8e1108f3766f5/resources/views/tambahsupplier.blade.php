@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Supplier</h1>
        </div>
        <form action="{{ url('/doAddsupplier') }}" " method="post">
            @csrf
            <div class="form-group">
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">{{ $err }}</div>
                    @endforeach
                @endif
                <label class="label" for="readonlyTextInput">ID Supplier</label>
                <input id="readonlyTextInput" class="form-control" placeholder="ID Supplier" readonly>

                <label class="label">Nama Supplier</label>
                <input class="form-control" name="nama" placeholder="Masukkan Nama">

                <label class="label">NPWP</label>
                <input class="form-control" name="npwp" placeholder="Masukkan NPWP">

                <label class="label">Alamat</label>
                <input class="form-control" name="alamat" placeholder="Masukkan Alamat">

                <label class="label">Provinsi</label>
                <input class="form-control" name="provinsi" placeholder="Masukkan Provinsi">

                <label class="label">Kota</label>
                <input class="form-control" name="kota" placeholder="Masukkan Kota">

                <label class="label">Kecamatan</label>
                <input class="form-control" name="kecamatan" placeholder="Masukkan Kecamatan">

                <label class="label">Kelurahan</label>
                <input class="form-control" name="kelurahan" placeholder="Masukkan Kelurahan">

                <label class="label">Kode Pos</label>
                <input class="form-control" name="kodepos" placeholder="Kode Pos">

                <label class="label">No. Telp</label>
                <input type="number" name="notelp" class="form-control" placeholder="Masukkan No. Telp">

                <label class="label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email">

                <label class="label">Item</label>
                <input type="text" name="item" class="form-control" placeholder="Masukkan Item">
                <label class="label">Nama Bank</label>
                <input type="text" class="form-control" name="nama_bank" placeholder="Pilih Nama Bank">
                <label class="label">No. Rekening</label>
                <input type="text" class="form-control" name="no_rekening" placeholder="Masukkan Nomor Rekening">

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
