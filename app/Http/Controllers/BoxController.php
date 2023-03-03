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
        Box::create([
            'id_box' => $kode,
            'nama_box'=>$req->nama,
            'tipe_box'=>$req->tipe_box,
            'panjang_box'=>$req->panjang,
            'lebar_box'=>$req->lebar,
            'tinggi_box'=>$req->tinggi,
            'keterangan'=>$req->keterangan
        ]);
        return redirect("/masterbox");
    }
}
