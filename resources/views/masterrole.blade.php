@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Role Permission</h1>
    </div>
    <table class="table">
        <thead class="thead" style="background-color: #3C62D1">
            <tr style="color: white">
                <th scope="col">Access</th>
                <th scope="col">Admin</th>
                <th scope="col">Accounting</th>
            </tr>
        </thead>
        <tbody>
            <?php $ctr2 = 1; ?>
            @foreach ($arrPermission as $prm)
            <tr>
                <td>{{ $prm->daftar_berita }}</td>
                <td><input type="checkbox" aria-label="" value="admin,{{ $prm->daftar_berita }}" onclick="myFunction(this)"
                    id="cekAdmin{{ $ctr2 - 1 }}"></td>
                <td><input type="checkbox" aria-label="" value="accounting,{{ $prm->daftar_berita }}"
                    onclick="myFunction(this)" id="cekAccounting{{ $ctr2 - 1 }}"></td>
            </tr>
            <?php $ctr2++; ?>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    var jArray = <?php echo json_encode($arrPermission); ?>;
    for (var i = 0; i < jArray.length; i++) {
        if (jArray[i]['admin'] == 1) {
            document.getElementById("cekAdmin" + i.toString()).checked = true;
        } else if (jArray[i]['admin'] == 0){
            document.getElementById("cekAdmin" + i.toString()).checked = false;
        }
        if (jArray[i]['accounting'] == 1) {
            document.getElementById("cekAccounting" + i.toString()).checked = true;
        } else if (jArray[i]['accounting'] == 0) {
            document.getElementById("cekAccounting" + i.toString()).checked = false;
        }
    }

    function myFunction(x) {
        $arr = x.value.split(",");
        if (x.checked == true) {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query1: $arr[0],
                    query2: $arr[1],
                    ctr: "Factivitytrue"
                },
            });
        } else {
            $.ajax({
                url: "autocomplete.php",
                method: "POST",
                data: {
                    query1: $arr[0],
                    query2: $arr[1],
                    ctr: "Factivityfalse"
                },
            });
        }
    }
</script>
@endsection
