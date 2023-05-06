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
    public function doAdd(Request $req){
        $req->validate(
            [
                "ttipebox" => 'required',
                "tnamabarang" => 'required',
                "tjenisbarang" => 'required',
                "tsupplier" => 'required',
                "tjumlah" => 'required',
                "tharga" => 'required',
                "tdiskon" => 'required',
                "tnett" => 'required',
            ],
            [
                "ttipebox.required" => "Tipe Box harus di isi",
                "tnamabarang.required" => "Nama Barang harus di isi",
                "tjenisbarang.required" => "Jenis Barang harus di isi",
                "tsupplier.required" => "Supplier harus di isi",
                "tjumlah.required" => "Jumlah harus di isi",
                "tharga.required" => "Harga harus di isi",
                "tdiskon.required" => "Diskon harus di isi",
                "tnett.required" => "Nett harus di isi",
            ]
        );

        PembelianBarang::create([
            'tipebox' => $req->ttipebox,
            'namabarang' => $req->tnamabarang,
            'jenisbarang' => $req->tjenisbarang,
            'supplier' => $req->tsupplier,
            'jumlah' => $req->tjumlah,
            'harga' => $req->tharga,
            'diskon' => $req->tdiskon,
            'nett' => $req->tnett
        ]);
        return redirect("/tambahpembelian");
    }
}
