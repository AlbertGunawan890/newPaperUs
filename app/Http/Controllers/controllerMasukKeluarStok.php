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
        
        $tanggalsekarang = new DateTime();

        masukkeluarstok::create([
            'namabarang' => $req->tnama,
            'jenisbarang' => $req->tjenisbarang,
            'jumlahmasuk' => $req->tjumlah,
            'hargasatuan' => $req->tjumlahsatuan,
            'hargatotal' => $req->tjumlahtotal,
            'lokasibarang' => $req->tlokasi,
            'keterangan' => $req->tketerangan,
            'tanggalmasuk' => $tanggalsekarang
        ]);
        return redirect("/arusbarang");
    }

}
