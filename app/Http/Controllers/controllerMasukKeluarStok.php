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

        
        // $sumtotalnya = ();
        
        // masukkeluarstok::create([
        //     'namabarang' => $req->tnama,
        //     'jenisbarang' => $req->tjenisbarang,
        //     'jumlah' => $req->tjumlah,
        //     'jumlahsatuan' => $req->tjumsatuan,
        //     'jumlahtotal' => ($req->tjumlah) * ($req->tjumsatuan),
        //     'keterangan' => $req->tketerangan
        // ]);
        // dd('jumlahtotal');
        // return redirect("/arusbarang");
    }
    // public function dooaddkeluar(Request $req)
    // {
        
    // }
}
