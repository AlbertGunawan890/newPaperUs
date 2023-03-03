<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function show()
    {
        $arrVendor = Vendor::all();
        return view('mastervendor', compact('arrVendor'));
    }
    public function doAdd(Request $req)
    {
        $vendor = Vendor::withTrashed()->get();
        $ctr = 1;
        foreach($vendor as $v){
            $ctr = intval(substr($v->id_vendor, 2)) + 1;
        }
        if($ctr<10){
            $kode = "V00{$ctr}";
        }else if($ctr<100){
            $kode = "V0{$ctr}";
        }else{
            $kode = "V{$ctr}";
        }

        Vendor::create([
            'id_vendor' => $kode,
            'nama_vendor'=>$req->nama,
            'npwp_vendor'=>$req->npwp,
            'alamat_vendor'=>$req->alamat,
            'provinsi_vendor'=>$req->provinsi,
            'kota_vendor'=>$req->kota,
            'kecamatan_vendor'=>$req->kecamatan,
            'kelurahan_vendor'=>$req->kelurahan,
            'kodepos_vendor'=>$req->kodepos,
            'notelp_vendor'=>$req->notelp,
            'email_vendor'=>$req->email,
            'item'=>$req->item,
            'nama_bank'=>$req->nama_bank,
            'no_rekening'=> $req->no_rekening

        ]);
        return redirect("/mastervendor");
    }
}
