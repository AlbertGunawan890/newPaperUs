<?php

namespace App\Http\Controllers;
use App\Models\masukkeluarstok;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class controllerMasukKeluarStok extends Controller
{
    public function showmasuk()
    {
        $arrbarangmasuk = masukkeluarstok::all();
        return view("barangmasuk",compact('arrbarangmasuk'));
    }
    public function showkeluar()
    {
        return view ("barangkeluar");
    }
    public function doaddmasuk(Request $req)
    {
        // $arusstok = masukkeluarstok::withTrashed()->get();

        $jum = $req->tjumlah;
        $jumsatuan = $req->tjumlahsatuan;
        $tanggalsekarang = new DateTime();
        $hasiltotal = $jum * $jumsatuan;
        masukkeluarstok::create([
            'namabarang' => $req->tnama,
            'jenisbarang' => $req->tjenisbarang,
            'jumlah' => $jum,
            'hargasatuan' => $jumsatuan,
            'hargatotal' => $hasiltotal,
            'lokasibarang' => $req->tlokasi,
            'keterangan' => $req->tketerangan,
            'tanggalmasuk' => $tanggalsekarang
        ]);
        return redirect("/arusbarang");
    }
    // public function dooaddkeluar(Request $req)
    // {

    // }
}
