@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Subcon</h1>
</div>

<div class="container" style="float: left;">
    <div class="form-group">
        
        <div class="row">
            <div class="col-2">
                <label class="label" for="disabledTextInput">Kode</label>
                <input id="idSubcon" class="form-control" placeholder="Kode" disabled>
            </div>
            <div class="col">
                <label class="label">Nama</label>
                <input id="namaSubcon" type="text" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="col-3">
                <label class="label">Jenis Produksi</label>
                <input id="jenisSubcon" type="text" class="form-control" placeholder="Masukkan Jenis Produksi">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="label">Provinsi</label>
                <input id="provinsiSubcon" type="text" class="form-control" placeholder="Masukkan Provinsi">
            </div>
            <div class="col">
                <label class="label">Kota</label>
                <input id="kotaSubcon" type="text" class="form-control" placeholder="Masukkan Kota">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <label class="label">Kecamatan</label>
                <input id="kecamatanSubcon" type="text" class="form-control" placeholder="Masukkan Kecamatan">
            </div>
            <div class="col-5">
                <label class="label">Kelurahan</label>
                <input id="kelurahanSubcon" type="text" class="form-control" placeholder="Masukkan Kelurahan">
            </div>
            <div class="col-2">
                <label class="label">Kode Pos</label>
                <input id="kodeposSubcon" type="number" class="form-control" placeholder="Masukkan Kode Pos">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="label">Alamat</label>
                <input id="alamatSubcon" type="text" class="form-control" placeholder="Masukkan Alamat Lengkap">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="label">No Telp.</label>
                <input id="telpSubcon" type="number" class="form-control" placeholder="Masukkan No Telp.">
            </div>
            <div class="col">
                <label class="label">No Fax.</label>
                <input id="faxSubcon" type="number" class="form-control" placeholder="Masukkan No Fax.">
            </div>
            <div class="col">
                <label class="label">Email</label>
                <input id="emailSubcon" type="email" class="form-control" placeholder="Masukkan Alamat Email">
            </div>
        </div>
        <hr/>
        <h3>Informasi Keuangan</h3>
        <div class="row">
            <div class="col">
                <label class="label">Nama Bank</label>
                <input id="bankSubcon" type="text" class="form-control" placeholder="Masukkan Nama Bank">
            </div>
            <div class="col">
                <label class="label">Nama Akun</label>
                <input id="akunSubcon" type="text" class="form-control" placeholder="Masukkan Nama Akun">
            </div>
            <div class="col">
                <label class="label">No. Rekening</label>
                <input id="norekSubcon" type="number" class="form-control" placeholder="Masukkan No. Rekening">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="label">Credit Limit</label>
                <input id="limitSubcon" type="number" class="form-control" placeholder="Credit Limit">
            </div>
            <div class="col">
                <label class="label">Credit Exposure</label>
                <input id="exposureSubcon" type="number" class="form-control" placeholder="Credit Exposure">
            </div>
            <div class="col">
                <label class="label">Available Credit</label>
                <input id="availableSubcon" type="number" class="form-control" placeholder="Available Credit">
            </div>
            <div class="col">
                <label class="label">Status</label>
                <select id="statusSubcon" class="form-control">
                        <option>Pilih Status</option>
                        <option>Aktif</option>
                        <option>Hold</option>
                    </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
@endsection
