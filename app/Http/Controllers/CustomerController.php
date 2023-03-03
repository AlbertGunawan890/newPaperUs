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
}
