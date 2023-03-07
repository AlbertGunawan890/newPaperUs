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
            'jenis_item'=>$req->jenis_item,
            'kategori_vendor'=>$req->kategori,
            'alamat_vendor'=>$req->alamat,
            'kota_vendor'=>$req->kota,
            'kecamatan_vendor'=>$req->kecamatan,
            'kelurahan_vendor'=>$req->kelurahan,
            'email_vendor'=>$req->email,
            'nama_bank'=>$req->nama_bank,
            'no_akun'=>$req->no_akun,
            'no_rekening'=> $req->no_rekening,
            'batasan_hutang'=>$req->batasan_hutang,
            'hutang_sekarang'=>$req->hutang_sekarang,
            'hutang_tersedia'=>$req->hutang_tersedia,
            'sisa_hutang'=>$req->sisa_hutang,
            'metode_pembayaran'=>$req->metode_pembayaran

        ]);
        return redirect("/mastervendor");
    }
}
