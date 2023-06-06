@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penawaran</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahpenawaran') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>

            </div>
            <div class="card-body">

                <table id="tabelFormPenawaran" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No. Penawaran</th>
                            <th>PIC</th>
                            <th>Jenis Box</th>
                            <th>Quantity</th>
                            <th>Jumlah Produksi</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Nett</th>
                            <th>Penerimaan</th>
                            <th>Aksi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penawaran as $prm)
                            <tr>
                                <td>{{ $prm->id_penawaran }}</td>
                                <td>{{ $prm->pic }}</td>
                                <td>{{ $prm->jenis_box }}</td>
                                <td>{{ $prm->qty }}</td>
                                <td>{{ $prm->jum_produksi }}</td>
                                <td>{{ $prm->harga_satuan }}</td>
                                <td>{{ $prm->diskon }}</td>
                                <td>{{ $prm->net }}</td>
                                <td>
                                    <button type="button" class="btn btn-success"
                                        onclick="btnAcc('{{ $prm->id_penawaran }}');window.location.reload();"><i
                                            class="fas fa-check"></i></button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="btnDecline('{{ $prm->id_penawaran }}');window.location.reload();"><i
                                            class="fas fa-times"></i></button>
                                </td>
                                <td>
                                    <div style="display: flex">
                                        <button type="button" style="margin-right: 5px;" class="btn btn-warning"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Edit Penawaran
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form>
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="cbPenjualan"
                                                                value="option3" onchange="myFunction()">
                                                            <label class="form-check-label" for="inlineRadioA">Penjualan</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" onchange="myFunction()"
                                                                id="cbStok" value="option3">
                                                            <label class="form-check-label" for="inlineRadioB">Stok Jadi</label>
                                                        </div>
                                                        <br>
                                                        {{-- <div id="stok_jadi" style="display:none">
                                                        <label class="label">Nama Brand</label>
                                                        <select data-live-search="true" class="selectpicker form-control" name="nama_brand">
                                                          <option selected>Pilih Nama Brand</option>
                                                          @foreach ($arrBrand as $prm)
                                                          <option value={{$prm->id_vendor}}>{{$prm->nama_vendor}}</option>
                                                          @endforeach
                                                        </select>


                                                        <label for="exampleFormControlTextarea1" class="label">PIC</label>
                                                        <input class="form-control" placeholder="Masukkan pic">


                                                        <label for="exampleFormControlTextarea1" class="label">Nama Barang</label>
                                                        <input class="form-control" placeholder="Masukkan nama barang">


                                                        <label for="exampleFormControlTextarea1" class="label">Harga</label>
                                                        <input class="form-control" placeholder="Masukkan harga">


                                                        <label for="exampleFormControlTextarea1" class="label">Quantity</label>
                                                        <input class="form-control" placeholder="Masukkan quantity">


                                                        <br>


                                                        <div class="checkbox">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Kertas</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Tinta</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox3">Laminasi</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox4">Plong</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox5">Hotprint</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox6">Sortir</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox7">Pembelian Dus</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox8">Packing</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox9">Emboss</label>
                                                          </div>

                                                          <button onclick="showCheckbox()" type="button" class="btn btn-info">Tambah</button>
                                                        </div>
                                                        <div class="checkbox" id="myCheckbox" style="display: none;">
                                                          <br>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                              <label class="form-check-label" for="inlineCheckbox1">Kertas</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                              <label class="form-check-label" for="inlineCheckbox2">Tinta</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                              <label class="form-check-label" for="inlineCheckbox3">Laminasi</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                                                              <label class="form-check-label" for="inlineCheckbox4">Plong</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                                              <label class="form-check-label" for="inlineCheckbox5">Hotprint</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
                                                              <label class="form-check-label" for="inlineCheckbox6">Sortir</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option2">
                                                              <label class="form-check-label" for="inlineCheckbox7">Pembelian Dus</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
                                                              <label class="form-check-label" for="inlineCheckbox8">Packing</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option2">
                                                              <label class="form-check-label" for="inlineCheckbox9">Emboss</label>
                                                            </div>
                                                          </div>
                                                        <br>
                                                    </div> --}}
                                                        <div id="penjualan" style="display: none">

                                                            <label class="label">Nama Brand</label>
                                                            <input class="form-control" placeholder="Masukkan Nama Brand" name="nama_brand" onchange="nama_brand_change()">
                                                            {{-- <select data-live-search="true" class="selectpicker form-control" name="nama_brand" onchange="nama_brand_change()">
                                                                <option selected>Pilih Nama Brand</option>
                                                                @foreach ($arrBrand as $prm)
                                                                    <option value={{ $prm->nama_vendor }}>{{ $prm->nama_vendor }}</option>
                                                                @endforeach
                                                            </select> --}}

                                                            <label for="exampleFormControlTextarea1" class="label">PIC</label>
                                                            <input class="form-control" placeholder="Masukkan pic" name="pic">

                                                            <label for="exampleFormControlTextarea1" class="label">Jenis Box</label>
                                                            <input class="form-control" placeholder="Jenis Box" name="jenis_box">

                                                            <label for="exampleFormControlTextarea1" class="label">Panjang</label>
                                                            <input class="form-control" placeholder="Masukkan panjang" name="panjang">

                                                            <label for="exampleFormControlTextarea1" class="label">Lebar</label>
                                                            <input class="form-control" placeholder="Masukkan lebar" name="lebar">

                                                            <label for="exampleFormControlTextarea1" class="label">Tinggi</label>
                                                            <input class="form-control" placeholder="Masukkan tinggi" name="tinggi">

                                                            <label for="exampleFormControlTextarea1" class="label">Quantity</label>
                                                            <input type="number" class="form-control" placeholder="Masukkan Quantity" name="qty" onchange="nett()">

                                                            <label for="exampleFormControlTextarea1" class="label">Jumlah Produksi</label>
                                                            <input type="number" class="form-control" placeholder="Masukkan Jumlah Produksi" name="jum_produksi">

                                                            <br>
                                                            <div class="checkbox">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" value="Kertas"
                                                                        id="inlineCheckbox1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Kertas</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox2"
                                                                        value="Tinta">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Tinta</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox3"
                                                                        value="Laminasi">
                                                                    <label class="form-check-label" for="inlineCheckbox3">Laminasi</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox4"
                                                                        value="Plong">
                                                                    <label class="form-check-label" for="inlineCheckbox4">Plong</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox5"
                                                                        value="Hotprint">
                                                                    <label class="form-check-label" for="inlineCheckbox5">Hotprint</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox6"
                                                                        value="Sortir">
                                                                    <label class="form-check-label" for="inlineCheckbox6">Sortir</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox7"
                                                                        value="Pembelian Dus">
                                                                    <label class="form-check-label" for="inlineCheckbox7">Pembelian Dus</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox8"
                                                                        value="Packing">
                                                                    <label class="form-check-label" for="inlineCheckbox8">Packing</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox9"
                                                                        value="Emboss">
                                                                    <label class="form-check-label" for="inlineCheckbox9">Emboss</label>
                                                                </div>

                                                                <button onclick="showCheckbox()" type="button" class="btn btn-info">Tambah</button>
                                                                <input type="hidden" name="proses2" value="0">
                                                            </div>
                                                            <div class="checkbox" id="myCheckbox" style="display: none;">
                                                                <br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox10"
                                                                        value="Kertas">
                                                                    <label class="form-check-label" for="inlineCheckbox10">Kertas</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox11"
                                                                        value="Tinta">
                                                                    <label class="form-check-label" for="inlineCheckbox11">Tinta</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox12"
                                                                        value="Laminasi">
                                                                    <label class="form-check-label" for="inlineCheckbox12">Laminasi</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox13"
                                                                        value="Plong">
                                                                    <label class="form-check-label" for="inlineCheckbox13">Plong</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox14"
                                                                        value="Hotprint">
                                                                    <label class="form-check-label" for="inlineCheckbox14">Hotprint</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox15"
                                                                        value="Sortir">
                                                                    <label class="form-check-label" for="inlineCheckbox15">Sortir</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox16"
                                                                        value="Pembelian Dus">
                                                                    <label class="form-check-label" for="inlineCheckbox16">Pembelian Dus</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox17"
                                                                        value="Packing">
                                                                    <label class="form-check-label" for="inlineCheckbox17">Packing</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="cb2[]" id="inlineCheckbox18"
                                                                        value="Emboss">
                                                                    <label class="form-check-label" for="inlineCheckbox18">Emboss</label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <label for="exampleFormControlTextarea1" class="label">Harga Satuan</label>
                                                            <input type="number" id="formHarga" class="form-control" placeholder="Masukkan Harga"onchange="nett()"
                                                                name="harga_satuan">

                                                            <label for="exampleFormControlTextarea1" class="label">Harga Satuan Terakhir</label>
                                                            <input type="number" class="form-control" readonly value="0" name="harga_satuan_terakhir">
                                                            <br>
                                                            <div style="display:flex;">
                                                                <div style="margin-left: -3%;" class="col-sm-6"></div>
                                                            </div>
                                                            <div style="display: flex;width: 100%;">
                                                                <div style="width: 100%;">
                                                                    <label for="exampleFormControlTextarea1" class="label">Diskon</label>
                                                                    <div style="display: flex;">
                                                                        <input class="form-control" style="width: 100%;" placeholder="Masukkan Diskon" name="diskon" onchange="disc();nett();">
                                                                        <button readonly="readonly" class="btn" style="height: 10px;">%</button>
                                                                    </div>
                                                                </div>
                                                                <div style="width: 100%;">
                                                                    <label for="exampleFormControlTextarea1" class="label">Potongan Harga</label>
                                                                    <input class="form-control" style="width: 100%;" placeholder="Masukkan Potongan Harga" name="potongan_harga" onchange="pot();nett();">
                                                                </div>
                                                            </div>

                                                            <label for="exampleFormControlTextarea1" class="label">Nett</label>
                                                            <input class="form-control" placeholder="Masukkan Nett" name="net">

                                                            <label for="exampleFormControlTextarea1" class="label">Harga Nett Terakhir</label>
                                                            <input type="number" class="form-control" value="0" readonly name="harga_net_terakhir">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <form method="post"
                                            action="{{ url('masterpenawaran/delete/' . $prm->id_penawaran) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                                @if ($prm->status_penawaran == '1')
                                    <td>Diterima</td>
                                @else
                                    <td>Ditolak</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
        function btnAcc(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPenawaran"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePenawaran"
                },
                success: function(data) {

                }
            });
        }
        function nett(){
            var qty = parseInt($("[name='qty']").val());
            var harga_satuan = parseInt($("[name='harga_satuan']").val());
            var diskon = parseInt($("[name='diskon']").val());
            var temp = (harga_satuan*qty)-((harga_satuan*qty)*diskon/100);
            $("[name='net']").val(temp);
        }

        function pot(){
            var potongan = parseInt($("[name='potongan_harga']").val());
            var qty = parseInt($("[name='qty']").val());
            var harga_satuan = parseInt($("[name='harga_satuan']").val());
            var temp = (potongan/(qty*harga_satuan))*100;
            $("[name='diskon']").val(temp);
        }

        function disc(){
            var diskon = parseInt($("[name='diskon']").val());
            var qty = parseInt($("[name='qty']").val());
            var harga_satuan = parseInt($("[name='harga_satuan']").val());
            var temp = (qty*harga_satuan)*(diskon/100);
            console.log(temp);
            $("[name='potongan_harga']").val(temp);
        }
        function myFunction() {
            var checkBox = document.getElementById("cbStok");
            var form = document.getElementById("formHarga");

            if (checkBox.checked == true) {
                // --Stock Jadi--
                document.getElementById("formHarga").readonly = true;
                document.getElementById("penjualan").style.display = "none";
                document.getElementById("stok_jadi").style.display = "block";

            } else {
                // --Penjualan--
                document.getElementById("formHarga").readonly = false;
                document.getElementById("penjualan").style.display = "block";
                document.getElementById("stok_jadi").style.display = "none";
            }
        }

        function nama_brand_change(){
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='nama_brand']").val(),
                    ctr: "Penawaran"
                },
                success: function(data) {
                    var temp = data.split(",");
                    $("[name='harga_satuan_terakhir']").val(temp[0]);
                    $("[name='harga_net_terakhir']").val(temp[1]);
                }
            });
        }
    </script>
    <!-- /.container-fluid -->
@endsection
