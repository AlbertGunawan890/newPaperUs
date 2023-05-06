@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Customer</h1>
        </div>
        <form action="{{ url('/doAddcustomer') }}" method="post">
            @csrf
            <div class="form-group">
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">{{ $err }}</div>
                    @endforeach
                @endif
                <label class="label" for="readonlyTextInput">ID Customer</label>
                <input name="id" id="readonlyTextInput" class="form-control" placeholder="ID Customer" readonly>

                <label class="label">Nama Brand</label>
                <input name="nama" class="form-control" placeholder="Masukkan Nama Brand">

                <label class="label">Nama PIC</label>
                <input name="pic" class="form-control" placeholder="Masukkan Nama PIC">

                <label class="label">NPWP</label>
                <input name="npwp" class="form-control" placeholder="Masukkan NPWP">

                <label class="label">Alamat</label>
                <input name="alamat" class="form-control" placeholder="Masukkan Alamat">

                <label class="label">Provinsi</label>
                <input name="provinsi" class="form-control" placeholder="Masukkan Provinsi">

                <label class="label">Kota</label>
                <input name="kota" class="form-control" placeholder="Masukkan Kota">

                <label class="label">Kecamatan</label>
                <input name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan">

                <label class="label">Kelurahan</label>
                <input name="kelurahan" class="form-control" placeholder="Masukkan Kelurahan">

                <label class="label">Kode Pos</label>
                <input name="kodepos" class="form-control" placeholder="Kode Pos">

                <label class="label">No. Telp</label>
                <input name="notelp" type="number" class="form-control" placeholder="Masukkan No. Telp">

                <label class="label">Fax</label>
                <input name="fax" type="number" class="form-control" placeholder="Masukkan No. Fax">

                <label class="label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Masukkan Email">

                <label class="label">Hutang Sekarang</label>
                <input name="hutang_sekarang" type="number" class="form-control">
                <label class="label">Hutang Tersedia</label>
                <input name="hutang_tersedia" type="number" class="form-control">
                <label class="label">Nomor Rekening</label>
                <input name="no_rekening" type="number" class="form-control">

                <label class="label">Metode Pembayaran</label>
                <input name="metode_pembayaran" class="form-control">

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
