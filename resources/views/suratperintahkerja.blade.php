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
                    {{-- livesearch input --}}
                    <select data-live-search="true" class="selectpicker form-control" id="id_penawaran" name="id_penawaran"
                        onchange="nama_brand_change();nama_brand_change_processing1();nama_brand_change_processing2();nama_brand_change_processing3();nama_brand_change_processing4();nama_brand_change_processing5();">
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
                    <input type="hidden" name="total" value="0">
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                    {{-- <input type="hidden" name="temp"> --}}
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table1" class="table table-bordered table-no-wrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Proses</th>
                            <th>Nama Vendor</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Harga Satuan Sebelumnya</th>
                            <th>Harga Total Sebelumnya</th>
                            <th>Penerimaan</th>
                            {{-- <th>Status</th> --}}
                            <th style="min-width: 120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="processing1">


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div id="p2" style="display: none;">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Proses</th>
                                <th>Nama Vendor</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Harga Total</th>
                                <th>Harga Satuan Sebelumnya</th>
                                <th>Harga Total Sebelumnya</th>
                                <th>Penerimaan</th>
                                {{-- <th>Status</th> --}}
                                <th style="min-width: 120px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="processing2">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div id="p3" style="display: none;">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Proses</th>
                                <th>Nama Vendor</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Harga Total</th>
                                <th>Harga Satuan Sebelumnya</th>
                                <th>Harga Total Sebelumnya</th>
                                <th>Penerimaan</th>
                                {{-- <th>Status</th> --}}
                                <th style="min-width: 120px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="processing3">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div id="p4" style="display: none;">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Proses</th>
                                <th>Nama Vendor</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Harga Total</th>
                                <th>Harga Satuan Sebelumnya</th>
                                <th>Harga Total Sebelumnya</th>
                                <th>Penerimaan</th>
                                {{-- <th>Status</th> --}}
                                <th style="min-width: 120px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="processing4">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div id="p5" style="display: none;">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered table-no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Proses</th>
                                <th>Nama Vendor</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Harga Total</th>
                                <th>Harga Satuan Sebelumnya</th>
                                <th>Harga Total Sebelumnya</th>
                                <th>Penerimaan</th>
                                <th style="min-width: 120px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="processing5">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>

    <script>
        var ctrSubmit = 0;
        document.getElementById("btnSubmit").disabled = true;
        function nama_brand_change() {
            var jArray1 = <?php echo json_encode($proces1); ?>;
            // for (var i = 0; i < jArray1.length; i++) {
            //     if ($("[name='id_penawaran']").val() == jArray1[i]['id_penawaran']) {
            //         if (jArray1[i]['status'] == '0'||jArray1[i]['status'] == '-1') {
            //             document.getElementById("btnSubmit").disabled = true;
            //             break;
            //         }else{
            //             document.getElementById("btnSubmit").disabled = false;
            //         }
            //     }
            // }
            // ===========================================
            var jArray2 = <?php echo json_encode($proces2); ?>;
            var ada = true;
            if (jArray2.length == 0) {
                ada = false;
            } else {
                for (var i = 0; i < jArray2.length; i++) {
                    if ($("[name='id_penawaran']").val() == jArray2[i]['id_penawaran']) {
                        ada = true;
                        if (jArray2[i]['status'] == '0') {
                            document.getElementById("btnSubmit").disabled = true;
                            break;
                        }
                    } else if ($("[name='id_penawaran']").val() != jArray2[i]['id_penawaran']) {
                        ada = false;
                    }
                }
            }
            if (ada) {
                document.getElementById("p2").style.display = "block";
            } else {
                document.getElementById("p2").style.display = "none";
                ada = true;
            }
            // ================================================
            var jArray3 = <?php echo json_encode($proces3); ?>;
            var ada2 = true;
            if (jArray3.length == 0) {
                ada2 = false;
            } else {
                for (var i = 0; i < jArray3.length; i++) {
                    if ($("[name='id_penawaran']").val() == jArray3[i]['id_penawaran']) {
                        ada2 = true;
                        if (jArray3[i]['status'] == '0') {
                            document.getElementById("btnSubmit").disabled = true;
                            break;
                        }
                    } else if ($("[name='id_penawaran']").val() != jArray3[i]['id_penawaran']) {
                        ada2 = false;
                    }
                }
            }
            if (ada2) {
                document.getElementById("p3").style.display = "block";
            } else {
                document.getElementById("p3").style.display = "none";
                ada2 = true;
            }
            // ================================================
            var jArray4 = <?php echo json_encode($proces4); ?>;
            var ada3 = true;
            if (jArray4.length == 0) {
                ada3 = false;
            } else {
                for (var i = 0; i < jArray4.length; i++) {
                    if ($("[name='id_penawaran']").val() == jArray4[i]['id_penawaran']) {
                        ada3 = true;
                        if (jArray4[i]['status'] == '0') {
                            document.getElementById("btnSubmit").disabled = true;
                            break;
                        }
                    } else if ($("[name='id_penawaran']").val() != jArray4[i]['id_penawaran']) {
                        ada3 = false;
                    }
                }
            }
            if (ada3) {
                document.getElementById("p4").style.display = "block";
            } else {
                document.getElementById("p4").style.display = "none";
                ada3 = true;
            }
            // ================================================
            var jArray5 = <?php echo json_encode($proces5); ?>;
            var ada4 = true;
            if (jArray5.length == 0) {
                ada4 = false;
            } else {
                for (var i = 0; i < jArray5.length; i++) {
                    if ($("[name='id_penawaran']").val() == jArray5[i]['id_penawaran']) {
                        ada4 = true;
                        if (jArray5[i]['status'] == '0') {
                            document.getElementById("btnSubmit").disabled = true;
                            break;
                        }
                    } else if ($("[name='id_penawaran']").val() != jArray5[i]['id_penawaran']) {
                        ada4 = false;
                    }
                }
            }
            if (ada4) {
                document.getElementById("p5").style.display = "block";
            } else {
                document.getElementById("p5").style.display = "none";
                ada4 = true;
            }
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
                    $("[name='total']").val(temp[6]);
                    console.log(temp);
                }
            });
        }

        function cek($sum){
            ctrSubmit += $sum;
            if($("[name='total']").val() == ctrSubmit){
                document.getElementById("btnSubmit").disabled = false;
            }else{
                document.getElementById("btnSubmit").disabled = true;
            }
        }

        function Rule1($id) {
            var a = document.getElementById("btnAcc" + $id);
            var b = document.getElementById("btnDecline" + $id);
            console.log(ctrSubmit);
            cek(1);
            a.style.display = "none";
            b.style.display = "block";
        }

        function Rule2($id) {
            var a = document.getElementById("btnAcc" + $id);
            var b = document.getElementById("btnDecline" + $id);
            cek(-1);
            b.style.display = "none";
            a.style.display = "block";
        }
        function Rule3($id) {
            var a = document.getElementById("btnAcc2" + $id);
            var b = document.getElementById("btnDecline2" + $id);
            cek(1);
            a.style.display = "none";
            b.style.display = "block";
        }

        function Rule4($id) {
            var a = document.getElementById("btnAcc2" + $id);
            var b = document.getElementById("btnDecline2" + $id);
            cek(-1);
            b.style.display = "none";
            a.style.display = "block";
        }
        function Rule5($id) {
            var a = document.getElementById("btnAcc3" + $id);
            var b = document.getElementById("btnDecline3" + $id);
            cek(1);
            a.style.display = "none";
            b.style.display = "block";
        }

        function Rule6($id) {
            var a = document.getElementById("btnAcc3" + $id);
            var b = document.getElementById("btnDecline3" + $id);
            cek(-1);
            b.style.display = "none";
            a.style.display = "block";
        }
        function Rule7($id) {
            var a = document.getElementById("btnAcc4" + $id);
            var b = document.getElementById("btnDecline4" + $id);
            cek(1);
            a.style.display = "none";
            b.style.display = "block";
        }

        function Rule8($id) {
            var a = document.getElementById("btnAcc4" + $id);
            var b = document.getElementById("btnDecline4" + $id);
            cek(-1);
            b.style.display = "none";
            a.style.display = "block";
        }
        function Rule9($id) {
            var a = document.getElementById("btnAcc5" + $id);
            var b = document.getElementById("btnDecline5" + $id);
            cek(1);
            a.style.display = "none";
            b.style.display = "block";
        }

        function Rule10($id) {
            var a = document.getElementById("btnAcc5" + $id);
            var b = document.getElementById("btnDecline5" + $id);
            cek(-1);
            b.style.display = "none";
            a.style.display = "block";
        }
        var jArray = <?php echo json_encode($no_spk); ?>;
        var no_spk = "";
        var temp = 0;
        if (jArray.length == 0) {
            no_spk = "SP0";
        } else {
            for (var i = 0; i < jArray.length; i++) {
                no_spk = jArray[i]['no_spk'];
            }
        }

        temp = parseInt(no_spk.substring(no_spk.length, 2)) + 1;
        no_spk = "SP" + temp.toString().padStart(3, '0');
        document.getElementsByName("no_spk")[0].value = no_spk.toString();

        function nama_brand_change_processing1() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Processing1SPK"
                },
                success: function(data) {
                    var temp = data.split(",");
                    for (let i = 0; i < temp.length - 1; i++) {
                        $("[name='proses[" + i + "]']").val(temp[i]);
                    }
                    // $("[name='temp']").val(temp.length - 1);
                    $("#processing1").html("");
                    $('#processing1').append(temp);
                }
            });
        }

        function nama_brand_change_processing2() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Processing2SPK"
                },
                success: function(data) {
                    var temp = data.split(",");
                    for (let i = 0; i < temp.length - 1; i++) {
                        $("[name='proses2[" + i + "]']").val(temp[i]);
                    }
                    // $("[name='temp']").val(temp.length - 1);
                    $("#processing2").html("");
                    $('#processing2').append(temp);
                }
            });
        }

        function nama_brand_change_processing3() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Processing3SPK"
                },
                success: function(data) {
                    var temp = data.split(",");
                    for (let i = 0; i < temp.length - 1; i++) {
                        $("[name='proses3[" + i + "]']").val(temp[i]);
                    }
                    // $("[name='temp']").val(temp.length - 1);
                    $("#processing3").html("");
                    $('#processing3').append(temp);
                }
            });
        }

        function nama_brand_change_processing4() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Processing4SPK"
                },
                success: function(data) {
                    var temp = data.split(",");
                    for (let i = 0; i < temp.length - 1; i++) {
                        $("[name='proses4[" + i + "]']").val(temp[i]);
                    }
                    // $("[name='temp']").val(temp.length - 1);
                    $("#processing4").html("");
                    $('#processing4').append(temp);
                }
            });
        }

        function nama_brand_change_processing5() {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: $("[name='id_penawaran']").val(),
                    ctr: "Processing5SPK"
                },
                success: function(data) {
                    var temp = data.split(",");
                    for (let i = 0; i < temp.length - 1; i++) {
                        $("[name='proses5[" + i + "]']").val(temp[i]);
                    }
                    // $("[name='temp']").val(temp.length - 1);
                    $("#processing5").html("");
                    $('#processing5').append(temp);
                }
            });
        }

        function harga_total_change($id) {
            var qty = parseInt($("[name='jumlah[" + $id + "]']").val());
            var harga_satuan = parseInt($("[name='harga_satuan[" + $id + "]']").val());
            var temp = harga_satuan * qty;
            $("[name='harga_total[" + $id + "]']").val(temp);
        }

        function harga_total_change2($id) {
            var qty = parseInt($("[name='jumlah2[" + $id + "]']").val());
            var harga_satuan = parseInt($("[name='harga_satuan2[" + $id + "]']").val());
            var temp = harga_satuan * qty;
            $("[name='harga_total2[" + $id + "]']").val(temp);
        }

        function harga_total_change3($id) {
            var qty = parseInt($("[name='jumlah3[" + $id + "]']").val());
            var harga_satuan = parseInt($("[name='harga_satuan3[" + $id + "]']").val());
            var temp = harga_satuan * qty;
            $("[name='harga_total3[" + $id + "]']").val(temp);
        }

        function harga_total_change4($id) {
            var qty = parseInt($("[name='jumlah4[" + $id + "]']").val());
            var harga_satuan = parseInt($("[name='harga_satuan4[" + $id + "]']").val());
            var temp = harga_satuan * qty;
            $("[name='harga_total4[" + $id + "]']").val(temp);
        }

        function harga_total_change5($id) {
            var qty = parseInt($("[name='jumlah5[" + $id + "]']").val());
            var harga_satuan = parseInt($("[name='harga_satuan5[" + $id + "]']").val());
            var temp = harga_satuan * qty;
            $("[name='harga_total5[" + $id + "]']").val(temp);
        }

        function btnAcc($id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: [$id, $("[name='proses[" + $id + "]']").val(), $("[name='nama_vendor']").val(), $(
                            "[name='jumlah[" + $id + "]']").val(), $("[name='harga_satuan[" + $id + "]']")
                        .val(), $("[name='harga_total[" + $id + "]']").val(),
                        $("[name='harga_satuan_sebelumnya[" + $id + "]']").val(), $(
                            "[name='harga_total_sebelumnya[" + $id + "]']").val(), $("[name='no_spk']").val()
                    ],
                    ctr: "AccSPKProcess1"
                },
                success: function(data) {

                }
            });
        }

        function btnAcc1(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccProcessing1"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline1(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclineProcessing1"
                },
                success: function(data) {

                }
            });
        }

        function btnAcc2(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPengiriman2"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline2(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePengiriman2"
                },
                success: function(data) {

                }
            });
        }

        function btnAcc3(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPengiriman3"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline3(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePengiriman3"
                },
                success: function(data) {

                }
            });
        }

        function btnAcc4(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPengiriman4"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline4(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePengiriman4"
                },
                success: function(data) {

                }
            });
        }

        function btnAcc5(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "AccPengiriman5"
                },
                success: function(data) {

                }
            });
        }

        function btnDecline5(id) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query: id,
                    ctr: "DeclinePengiriman5"
                },
                success: function(data) {

                }
            });
        }
    </script>
    </div>
    <!-- /.container-fluid -->
@endsection
