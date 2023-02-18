@extends('layouts.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Customer</h1>
    </div>

    <div class="container" style="float: left;">
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label class="label" for="disabledTextInput">Kode</label>
                    <input id="idCustomer" class="form-control" placeholder="Kode" disabled>
                </div>
                <div class="col">
                    <label class="label">Nama Customer</label>
                    <input id="namaCustomer" type="text" class="form-control" placeholder="Masukkan Nama Customer">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label">Provinsi</label>
                    <input id="provinsiCustomer" type="text" class="form-control" placeholder="Masukkan Provinsi">
                </div>
                <div class="col">
                    <label class="label">Kota</label>
                    <input id="kotaCustomer" type="text" class="form-control" placeholder="Masukkan Kota">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <label class="label">Kecamatan</label>
                    <input id="kecamatanCustomer" type="text" class="form-control" placeholder="Masukkan Kecamatan">
                </div>
                <div class="col-5">
                    <label class="label">Kelurahan</label>
                    <input id="kelurahanCustomer" type="text" class="form-control" placeholder="Masukkan Kelurahan">
                </div>
                <div class="col-2">
                    <label class="label">Kode Pos</label>
                    <input id="kodeposCustomer" type="number" class="form-control" placeholder="Masukkan Kode Pos">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label">Alamat</label>
                    <input id="alamatCustomer" type="text" class="form-control" placeholder="Masukkan Alamat Lengkap">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label">No Telp.</label>
                    <input id="telpCustomer" type="number" class="form-control" placeholder="Masukkan No Telp.">
                </div>
                <div class="col">
                    <label class="label">No Fax.</label>
                    <input id="faxCustomer" type="number" class="form-control" placeholder="Masukkan No Fax.">
                </div>
                <div class="col">
                    <label class="label">Email</label>
                    <input id="emailCustomer" type="email" class="form-control" placeholder="Masukkan Alamat Email">
                </div>
            </div>
            <hr/>
            <h3>Informasi Keuangan</h3>
            <div class="row">
                <div class="col">
                    <label class="label">Nama Bank</label>
                    <input id="bankCustomer" type="text" class="form-control" placeholder="Masukkan Nama Bank">
                </div>
                <div class="col">
                    <label class="label">Nama Akun</label>
                    <input id="akunCustomer" type="text" class="form-control" placeholder="Masukkan Nama Akun">
                </div>
                <div class="col">
                    <label class="label">No. Rekening</label>
                    <input id="norekCustomer" type="number" class="form-control" placeholder="Masukkan No. Rekening">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="label">Credit Limit</label>
                    <input id="limitCustomer" type="number" class="form-control" placeholder="Credit Limit">
                </div>
                <div class="col">
                    <label class="label">Credit Exposure</label>
                    <input id="exposureCustomer" type="number" class="form-control" placeholder="Credit Exposure">
                </div>
                <div class="col">
                    <label class="label">Available Credit</label>
                    <input id="availableCustomer" type="number" class="form-control" placeholder="Available Credit">
                </div>
                <div class="col">
                    <label class="label">Status</label>
                    <select id="statusCustomer" class="form-control">
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
