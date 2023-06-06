<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $arrCustomer = Customer::all();
        return view('mastercustomer', compact('arrCustomer'));
    }
    public function doAdd(Request $req)
    {
        $req->validate(
            [
                "nama" => 'required',
                "pic" => 'required',
                "alamat" => 'required',
                "provinsi" => 'required',
                "kota" => 'required',
                "kodepos" => 'required',
                "notelp" => 'required',
                "email"=> 'required',
                "no_rekening" => 'required',
                "metode_pembayaran" => 'required',
            ],
            [
                "nama.required" => 'Nama Harus Terisi',
                "pic.required" => 'PIC Harus Terisi',
                "alamat.required" => 'Alamat Harus Terisi',
                "provinsi.required" => 'Provinisi Harus Terisi',
                "kota.required" => 'Kota Harus Terisi',
                "kodepos.required" => 'Kode Pos Harus Terisi',
                "notelp.required" => 'Nomor Telepon Harus Terisi',
                "email.required"=> 'Email Harus Terisi',
                "no_rekening.required" => 'Nomor Rekening Harus Terisi',
                "metode_pembayaran.required" => 'Metode Pembayaran Harus Terisi',
            ]
        );
        $customer = Customer::withTrashed()->get();
        $ctr = 1;
        foreach($customer as $c){
            $ctr = intval(substr($c->id_customer, 2)) + 1;
        }
        if($ctr<10){
            $kode = "CU00{$ctr}";
        }else if($ctr<100){
            $kode = "CU0{$ctr}";
        }else{
            $kode = "CU{$ctr}";
        }

        Customer::create([
            'id_customer' => $kode,
            'nama_customer'=>$req->nama,
            'npwp_customer'=>$req->npwp,
            'alamat_customer'=>$req->alamat,
            'provinsi_customer'=>$req->provinsi,
            'kota_customer'=>$req->kota,
            'kecamatan_customer'=>$req->kecamatan,
            'kelurahan_customer'=>$req->kelurahan,
            'kodepos_customer'=>$req->kodepos,
            'notelp_customer'=>$req->notelp,
            'nofax_customer'=>$req->fax,
            'email_customer'=>$req->email,
            'batasan_hutang'=>$req->batasan_hutang,
            'hutang_sekarang'=> $req->hutang_sekarang,
            'hutang_tersedia'=> $req->hutang_tersedia,
            'no_rekening'=> $req->no_rekening,
            'metode_pembayaran'=> $req->metode_pembayaran

        ]);
        return redirect("/mastercustomer");
    }

    public function doEdit(Request $req){
        $req->validate(
            [
                "nama" => "required",
                "alamat" => "required",
                "notelp" => "required",
                "email" => "required",
            ],
            [
                "nama.required" => 'Nama Harus Terisi',
                "alamat.required" => 'Alamat Harus Terisi',
                "notelp.required" => 'Nomor Telepon Harus Terisi',
                "email.required"=> 'Email Harus Terisi',
            ]
        );

        $customer = Customer::withTrashed()->find($req->id_customer);
        $res = $customer->update([
            "nama_customer" => $req->nama,
            "alamat_customer" => $req->alamat,
            "notelp_customer" => $req->notelp,
            "email_customer" => $req->email
        ]);

        if($res){
            return redirect("/mastercustomer");
        }else{
            return redirect("/mastercustomer");
        }
    }

    public function delete(Request $req, $id)
    {
        $customer = Customer::withTrashed()->find($id);
        if($customer->trashed()){
            $result = $customer->restore();
        }else{
            $result = $customer->delete();
        }
        if ($result) {
            return redirect('/mastercustomer');
        } else {
            return redirect('/mastercustomer');
        }
    }
}
