@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Surat Perintah Kerja</h1>
        </div>
        <div class="container">
        <div class="form-group">                  
            <label class="label" for="disabledTextInput">No. Penawaran</label>
            <input id="disabledTextInput" class="form-control" placeholder="No. Penawaran" disabled>

            <label class="label">No. SPK</label>
            <input class="form-control" placeholder="No. SPK">
        
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1" value="option3">
                <label class="form-check-label" for="inlineRadioA">Produk</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions1" value="option3">
                <label class="form-check-label" for="inlineRadioB">Stok Barang Jadi</label>
            </div>
            <br>

            <label for="exampleFormControlTextarea1" class="label">Nama Customer</label>
            <input class="form-control" placeholder="Pilih Nama Customer">

            <label for="exampleFormControlTextarea1" class="label">Jenis Produksi</label>
            <input type="number" class="form-control" placeholder="Jenis Produksi">

            <label for="exampleFormControlTextarea1" class="label">Total Produksi</label>
            <input type="number" class="form-control" placeholder="Masukkan Total Produksi">

            <label for="exampleFormControlTextarea1" class="label">Link Kardus</label>
            <input type="number" class="form-control" placeholder="Link Kardus">

            <label for="exampleFormControlTextarea1" class="label">Jenis Gunting</label>
            <input class="form-control" placeholder="Jenis Gunting">

            <label for="exampleFormControlTextarea1" class="label">Jenis Plat</label>
            <input class="form-control" placeholder="Jenis Plat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </br>
        <div class="card">
            <div class="card-body">
            <table id="tabelProses" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Proses</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Harga Total</th>
                        <th>Harga Satuan Sebelumnya</th>
                        <th>Harga Total Sebelumnya</th>
                        <th>Nama Vendor</th>
                        <th>Penerimaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses" disabled ></td>
                        <td><input type="number" class="form-control" placeholder="Jumlah"></td>
                        <td><input type="number" class="form-control" placeholder="Harga satuan"></td>
                        <td>Rp30.000</td>
                        <td>Rp10.000</td>
                        <td>Rp20.000</td>
                        <td>ABC</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses"disabled ></td>
                        <td><input type="number" class="form-control" placeholder="Jumlah"></td>
                        <td><input type="number" class="form-control" placeholder="Harga satuan"></td>
                        <td>Rp30.000</td>
                        <td>Rp10.000</td>
                        <td>Rp20.000</td>
                        <td>ABC</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection