<?php

namespace App\Http\Controllers;

use App\Models\masukkeluarstok;
use App\Models\PembelianBarang;
use Illuminate\Http\Request;

class PembelianBarangcontroller extends Controller
{
    public function show()
    {
        return view('tambahpembelian');
        
    }
    public function showarus()
    {
        $arusmasukkeluar = masukkeluarstok::all();
        return view("arusbarang",compact('arusmasukkeluar'));
    }
    
    public function showpembelian()
    {
        $arrpembelianbarang = PembelianBarang::all();
        return view('pembelianbarang',compact('arrpembelianbarang')
        );
    }
    public function doAdd(Request $req)
    {
        $pembbarang = PembelianBarang::withTrashed()->get();

        PembelianBarang::create([
            'tipebox' => $req->ttipebox,
            'namabarang' => $req->tnamabarang,
            'jenisbarang' => $req->tjenisbarang,
            'supplier' => $req->tsupplier,
            'jumlah' => $req->tjumlah,
            'harga' => $req->tharga,
            'diskon' => $req->tdiskkon,
            'nett' => $req->tnett
        ]);
        return redirect("/tambahpembelian");
    }
}
