<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penawaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function show()
    {
        $pembayaran = Pembayaran::all();
        return view('formdp', compact('pembayaran'));
    }

    public function showBrand()
    {
        $penawaran = Penawaran::where('status_penawaran', '1')->get();
        return view('tambahdp', compact('penawaran'));
    }

    public function doAddpembayaran(Request $req)
    {
        $pembayaran = Pembayaran::get();
        $ctr = 1;
        foreach ($pembayaran as $p) {
            $ctr = intval(substr($p->id_pembayaran, 2)) + 1;
        }
        if ($ctr < 10) {
            $kode = "PB00{$ctr}";
        } else if ($ctr < 100) {
            $kode = "PB0{$ctr}";
        } else {
            $kode = "PB{$ctr}";
        }

        Pembayaran::create([
            'id_pembayaran'=>$kode,
            'id_penawaran'=>$req->id_penawaran,
            'nama_brand'=>$req->nama_brand,
            'pic'=>$req->pic,
            'jenis_box'=>$req->jenis_box,
            'qty'=>$req->qty,
            'jum_produksi'=>$req->jum_produksi,
            'harga'=>$req->harga,
            'pembayaran'=>$req->pembayaran,
            'sisa'=>$req->sisa,
            'termin'=>$req->termin,
            'status_pembayaran'=> 0
        ]);

        return redirect("/formdp");
    }

    public function delete(Request $request , $id)
    {
        $pembayaran = Pembayaran::withTrashed()->find($id);
        if($pembayaran->trashed()){
            $result = $pembayaran->restore();
        }else{
            $result = $pembayaran->delete();
        }
        if ($result) {
            return redirect('/formdp');
        } else {
            return redirect('/formdp');
        }
    }
}
