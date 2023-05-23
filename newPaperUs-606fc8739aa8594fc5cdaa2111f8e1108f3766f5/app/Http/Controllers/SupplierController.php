<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function show()
    {
        $arrSupplier = Supplier::all();
        return view('mastersupplier', compact('arrSupplier'));
    }
    public function doAdd(Request $req)
    {
        $req->validate(
            [
                "nama" => 'required',
                "alamat" => 'required',
                "provinsi" => 'required',
                "kota" => 'required',
                "kodepos" => 'required',
                "notelp" => 'required',
                "email"=> 'required',
                "item" => 'required',
                "nama_bank" => 'required',
                "no_rekening" => 'required',
            ],
            [
                "nama.required" => 'Nama Harus Terisi',
                "pic.required" => 'PIC Harus Terisi',
                "alamat.required" => 'Alamat Harus Terisi',
                "provinsi.required" => 'Provinisi Harus Terisi',
                "kota.required" => 'Kota Harus Terisi',
                "kodepos.required" => 'Kode Pos Harus Terisi',
                "notelp.required" => 'Nomor Telpon Harus Terisi',
                "email.required"=> 'Email Harus Terisi',
                "item.required" => 'Item Harus Terisi',
                "nama_bank.required" => 'Nama Bank Harus Terisi',
                "no_rekening.required" => 'Nomor Rekening Harus Terisi',
            ]
        );
        $supplier = Supplier::withTrashed()->get();
        $ctr = 1;
        foreach($supplier as $s){
            $ctr = intval(substr($s->id_supplier, 2)) + 1;
        }
        if($ctr<10){
            $kode = "S00{$ctr}";
        }else if($ctr<100){
            $kode = "S0{$ctr}";
        }else{
            $kode = "S{$ctr}";
        }

        Supplier::create([
            'id_supplier' => $kode,
            'nama_supplier'=>$req->nama,
            'npwp_supplier'=>$req->npwp,
            'alamat_supplier'=>$req->alamat,
            'provinsi_supplier'=>$req->provinsi,
            'kota_supplier'=>$req->kota,
            'kecamatan_supplier'=>$req->kecamatan,
            'kelurahan_supplier'=>$req->kelurahan,
            'kodepos_supplier'=>$req->kodepos,
            'notelp_supplier'=>$req->notelp,
            'email_supplier'=>$req->email,
            'item'=>$req->item,
            'nama_bank'=>$req->nama_bank,
            'no_rekening'=> $req->no_rekening

        ]);
        return redirect("/mastersupplier");
    }
    public function delete($id)
    {
        $supplier = Supplier::withTrashed()->find($id);
        if($supplier->trashed()){
            $result = $supplier->restore();
        }else{
            $result = $supplier->delete();
        }
        if ($result){
            return redirect('/mastersupplier');
        } else {
            return redirect('/mastersupplier');
        }
    }
}
