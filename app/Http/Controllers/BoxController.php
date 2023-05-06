<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function show()
    {
        $arrBox = Box::all();
        return view('masterbox', compact('arrBox'));
    }
    public function doAdd(Request $req)
    {
        $box = Box::withTrashed()->get();
        $ctr = 1;
        foreach($box as $b){
            $ctr = intval(substr($b->id_box, 2)) + 1;
        }
        if($ctr<10){
            $kode = "B00{$ctr}";
        }else if($ctr<100){
            $kode = "B0{$ctr}";
        }else{
            $kode = "B{$ctr}";
        }
        $req->validate(
            [
                "namabox" => 'required',
                "tipe_box" => 'required',
                "panjang" => 'required',
                "lebar" => 'required',
                "tinggi" => 'required',
            ],
            [
                "namabox.required" => "Nama Box harus di isi",
                "tipe_box.required" => "Tipe Box harus di isi",
                "panjang.required" => "Panjang harus di isi",
                "lebar.required" => "Lebar harus di isi",
                "tinggi.required" => "Tinggi harus di isi",
            ]
        );
        Box::create([
            'id_box' => $kode,
            'nama_box'=>$req->namabox,
            'tipe_box'=>$req->tipe_box,
            'panjang_box'=>$req->panjang,
            'lebar_box'=>$req->lebar,
            'tinggi_box'=>$req->tinggi,
            'keterangan'=>$req->keterangan
        ]);
        return redirect("/masterbox");
    }
}
