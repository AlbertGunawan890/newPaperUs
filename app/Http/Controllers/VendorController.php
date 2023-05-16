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
        $req->validate(
            [
                "nama" => 'required',
                "jenis_item" => 'required',
                "kategori" => 'required',
                "alamat" => 'required',
                "kota" => 'required',
                "email" => 'required',
                "nama_bank" => 'required',
                "no_akun" => 'required',
                "no_rekening" => 'required',
            ],
            [
                "nama.required" => "Nama harus di isi",
                "jenis_item.required" => "Jenis Item harus di isi",
                "kategori.required" => "Kategori harus di isi",
                "alamat.required" => "Alamat harus di isi",
                "kota.required" => "Kota harus di isi",
                "email.required" => "Email harus di isi",
                "nama_bank.required" => "Nama Bank harus di isi",
                "no_akun.required" => "No Akun harus di isi",
                "no_rekening.required" => "No Rekening harus di isi",
                
            ]
        );
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
    public function delete(Request $req,$id)
    {
        $vendor = Vendor::withTrashed()->find($id);
        if($vendor->trashed()){
            $result = $vendor->restore();
        }else{
            $result = $vendor->delete();
        }
        if ($result) {
            return redirect('/mastervendor');
        } else {
            return redirect('/mastervendor');
        }
    }
}
