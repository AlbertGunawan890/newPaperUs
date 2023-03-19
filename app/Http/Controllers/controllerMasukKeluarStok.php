<?php

namespace App\Http\Controllers;
use App\Models\masukkeluarstok;
use Illuminate\Http\Request;

class controllerMasukKeluarStok extends Controller
{
    public function showmasuk()
    {
        $arrbarangmasuk = masukkeluarstok::all();
        return view("barangmasuk");
    }
    public function showkeluar()
    {
        return view ("barangkeluar");
    }
    public function doaddmasuk(Request $req)
    {
        // $arusstok = masukkeluarstok::withTrashed()->get();

        // $jum = $req->tjumlah;
        // $jumsatuan = $req->tjumsatuan;
        
        // $hasiltotal = $jum * $jumsatuan;
        
        // masukkeluarstok::create([
        //     'namabarang' => $req->tnama,
        //     'jenisbarang' => $req->tjenisbarang,
        //     'jumlah' => $jum,
        //     'jumlahsatuan' => $jumsatuan,
        //     'jumlahtotal' => $hasiltotal,
        //     'keterangan' => $req->tketerangan
        // ]);
        // return redirect("/arusbarang");
    }
    // public function dooaddkeluar(Request $req)
    // {
        
    // }
}
