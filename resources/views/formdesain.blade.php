@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Desain</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href={{ url('tambahdesain') }}>
                    <button type="button" class="btn btn-primary my-auto">
                        Tambah Data
                    </button>
                </a>
            </div>
            <div class="card-body">
                <table id="tabelFormDesain" class="table table-bordered table-no-wrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Penawaran</th>
                            <th>PIC</th>
                            <th>Link Desain</th>
                            <th style="min-width: 250px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ctr2 = 1; ?>
                        @foreach ($desain as $prm)
                            <tr>
                                <td>{{ $prm->id_penawaran }}</td>
                                <td>{{ $prm->pic }}</td>
                                <td>{{ $prm->link_desain }}</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="rbcekd{{ $ctr2 - 1 }}" type="radio"
                                            onclick="rbCheckDecline(name)" name="{{ $prm->id_desain }}" id="inlineRadio1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Reject</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="rbceka{{ $ctr2 - 1 }}" type="radio"
                                            onclick="rbCheckAcc(name)" name="{{ $prm->id_desain }}" id="inlineRadio2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Accept</label>
                                    </div>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php $ctr2++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <script>
                var jArray = <?php echo json_encode($desain); ?>;
                for (var i = 0; i < jArray.length; i++) {
                    if (jArray[i]['status_desain'] == 1) {
                        document.getElementById("rbceka" + i.toString()).checked = true;
                    } else if (jArray[i]['status_desain'] == -1) {
                        document.getElementById("rbcekd" + i.toString()).checked = true;
                    }else{
                        document.getElementById("rbceka" + i.toString()).checked = false;
                        document.getElementById("rbcekd" + i.toString()).checked = false;
                    }
                }

                function rbCheckAcc(name) {
                    $.ajax({
                        url: "autocomplete.php",
                        method: "POST",
                        data: {
                            query: name,
                            ctr: "AccDesain"
                        },
                        success: function(data) {

                        }
                    });
                }

                function rbCheckDecline(name) {
                    $.ajax({
                        url: "autocomplete.php",
                        method: "POST",
                        data: {
                            query: name,
                            ctr: "DeclineDesain"
                        },
                        success: function(data) {

                        }
                    });
                }
            </script>
        </div>
        <!-- /.container-fluid -->
    @endsection
