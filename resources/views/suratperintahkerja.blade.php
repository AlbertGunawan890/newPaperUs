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
                <form action="{{ url('/doAddSPK') }}" method="post">
                    @csrf
                    <label class="label">No. SPK</label>
                    <input class="form-control" placeholder="No. SPK" name="no_spk" readonly>

                    <label class="label" for="readonlyTextInput">No. Penawaran</label>
                    <select data-live-search="true" class="selectpicker form-control" id="id_penawaran" name="id_penawaran"
                        onchange="nama_brand_change()">
                        <option selected>Pilih No. Penawaran</option>
                        @foreach ($desain as $prm)
                            <option value={{ $prm->id_penawaran }}>{{ $prm->id_penawaran }}</option>
                        @endforeach
                    </select>

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
                    <input class="form-control" name="pic" placeholder="Nama Customer">

                    <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
                    <input class="form-control" name="jenis_box" placeholder="Jenis Box">

                    <label for="exampleFormControlTextarea1" class="label">Total Produksi</label>
                    <input type="number" class="form-control" name="jum_produksi" placeholder="Total Produksi">

                    <label for="exampleFormControlTextarea1" class="label">Link Desain</label>
                    <input class="form-control" name="link_desain" placeholder="Link Desain">

                    <label for="exampleFormControlTextarea1" class="label">Jenis Pisau</label>
                    <input class="form-control" name="pisau" placeholder="Jenis Pisau">

                    <label for="exampleFormControlTextarea1" class="label">Jenis Plat</label>
                    <input class="form-control" name="plat" placeholder="Jenis Plat">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br>
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
                        <td><input type="text" class="form-control" placeholder="Pilih proses" readonly></td>
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
                        <td><input type="text" class="form-control" placeholder="Pilih proses"readonly></td>
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
    <br>
    <div class="card">
        <div class="card-body">
            <table id="tabelProses2" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
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
                        <td><input type="text" class="form-control" placeholder="Pilih proses" readonly></td>
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
                        <td><input type="text" class="form-control" placeholder="Pilih proses"readonly></td>
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
    <script>
        var jArray = <?php echo json_encode($spk); ?>;
        var no_spk = "";
        va = temp = 0;
        if (jArray.length == 0) {
            no_spk = "SP0";
        } else {
            for (var i = 0; i < jArray.length; i++) {
                no_spk = jArray[i]['no_spk'];
            }
        }
        temp = parseInt(no_spk.substring(no_spk.length, 2)) + 1;
        no_spk = "SP" + temp.toString().padStart(3, '0');
        console.log(no_spk);
        document.getElementsByName("no_spk")[0].value = no_spk.toString();

        function nama_brand_change() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "PenawaranSPK"
                },
                success: function(data) {
                    var temp = data.split(",");
                    $("[name='pic']").val(temp[0]);
                    $("[name='jenis_box']").val(temp[1]);
                    $("[name='jum_produksi']").val(temp[2]);
                    $("[name='link_desain']").val(temp[3]);
                    $("[name='pisau']").val(temp[4]);
                    $("[name='plat']").val(temp[5]);
                }
            });
        }
    </script>

    </div>
    <!-- /.container-fluid -->
@endsection
