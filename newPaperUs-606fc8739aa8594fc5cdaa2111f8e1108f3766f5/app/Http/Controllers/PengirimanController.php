<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Models\SPK;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function show()
    {
        $pengiriman = Pengiriman::all();
        return view('suratjalan', compact('pengiriman'));
    }

    public function showSPK()
    {
        $no_spk = SPK::all();
        return view('tambahpengiriman', compact('no_spk'));
    }

    public function doAddPengiriman(Request $req)
    {
        Pengiriman::create([
            'no_spk' => $req->no_spk,
            'no_surat_jalan'=>$req->no_surat_jalan,
            'no_kendaraan'=>$req->no_kendaraan,
            'nama_pengiriman'=>$req->nama_pengiriman,
            'nama_penerima'=>$req->nama_penerima,
            'alamat_penerima'=>$req->alamat_penerima,
            'qty'=>$req->qty,
            'tanggal'=>$req->tanggal
        ]);
        return redirect("/suratjalan");
    }
}
