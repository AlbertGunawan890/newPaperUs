<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function show()
    {
        $arrPegawai = Pegawai::all();
        return view('masterpegawai', compact('arrPegawai'));
    }
    public function doAdd(Request $req)
    {
        $pegawai = Pegawai::withTrashed()->get();
        $ctr = 1;
        foreach($pegawai as $p){
            $ctr = intval(substr($p->id_pegawai, 2)) + 1;
        }
        if($ctr<10){
            $kode = "P00{$ctr}";
        }else if($ctr<100){
            $kode = "P0{$ctr}";
        }else{
            $kode = "P{$ctr}";
        }
        $req->validate(
            [
                "nama" => 'required',
                "alamat" => 'required',
                "provinsi" => 'required',
                "kota" => 'required',
                "kodepos" => 'required',
                "telpon" => 'required',
                "email" => 'required',
                "password" => 'required',
            ],
            [
                "nama.required" => "Nama harus di isi",
                "alamat.required" => "Alamat harus di isi",
                "provinsi.required" => "Provinsi harus di isi",
                "kota.required" => "Kota harus di isi",
                "kodepos.required" => "Kode Pos harus di isi",
                "telpon.required" => "No Telpon harus di isi",
                "email.required" => "Email harus di isi",
                "password.required" => "Password harus di isi",
            ]
        );
        $password = Hash::make($req->password);
        Pegawai::create([
            'id_pegawai' => $kode,
            'nama_pegawai'=>$req->nama,
            'npwp_pegawai'=>$req->npwp,
            'alamat_pegawai'=>$req->alamat,
            'provinsi_pegawai'=>$req->provinsi,
            'kota_pegawai'=>$req->kota,
            'kecamatan_pegawai'=>$req->kecamatan,
            'kelurahan_pegawai'=>$req->kelurahan,
            'kodepos_pegawai'=>$req->kodepos,
            'notelp_pegawai'=>$req->notelp,
            'fax_pegawai'=>$req->fax,
            'email_pegawai'=>$req->email,
            'kontak_personal'=>$req->kontak_personal,
            'password'=> $password

        ]);
        return redirect("/masterpegawai");
    }
}
