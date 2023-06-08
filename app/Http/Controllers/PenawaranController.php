<?php

namespace App\Http\Controllers;

use App\Models\Penawaran;
use App\Models\Processing1;
use App\Models\Processing2;
use App\Models\Processing3;
use App\Models\Processing4;
use App\Models\Processing5;
use App\Models\SPK;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function showBrand()
    {
        $arrBrand = Vendor::all();
        $spk = SPK::all();
        return view('tambahpenawaran', compact('arrBrand','spk'));
    }

    public function show()
    {
        $penawaran = Penawaran::all();
        return view('masterpenawaran', compact('penawaran'));
    }

    public function doAddpenawaran(Request $request)
    {
        $penawaran = Penawaran::get();
        $ctr = 1;
        foreach ($penawaran as $p) {
            $ctr = intval(substr($p->id_penawaran, 2)) + 1;
        }
        if ($ctr < 10) {
            $kode = "P00{$ctr}";
        } else if ($ctr < 100) {
            $kode = "P0{$ctr}";
        } else {
            $kode = "P{$ctr}";
        }
        $harga_satuan_terakhir = 0;
        $harga_net_terakhir = 0;
        if($request->harga_satuan_terakhir==""){
            $harga_satuan_terakhir = 0;
        }else{
            $harga_satuan_terakhir=$request->harga_satuan_terakhir;
        }
        if($request->harga_net_terakhir==""){
            $harga_net_terakhir = 0;
        }else{
            $harga_net_terakhir=$request->harga_net_terakhir;
        }
        Penawaran::create([
            'id_penawaran' => $kode,
            'nama_brand' => $request->nama_brand,
            'pic' => $request->pic,
            'jenis_box' => $request->jenis_box,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'tinggi' => $request->tinggi,
            'qty' => $request->qty,
            'jum_produksi' => $request->jum_produksi,
            'harga_satuan' => $request->harga_satuan,
            'harga_satuan_terakhir' => $harga_satuan_terakhir,
            'diskon' => $request->diskon,
            'net' => $request->net,
            'harga_net_terkahir' => $harga_net_terakhir,
            'status_penawaran' => 0,
        ]);

        $checked = $request->cb;
        for ($i = 0; $i < count($checked); $i++) {

            Processing1::create([
                'id_penawaran' => $kode,
                'nama_brand' => $request->nama_brand,
                'proses' => $checked[$i],
                'status' => 0,
            ]);
        }

        if ($request->cb2 != null) {
            $checked2 = $request->cb2;
            for ($i = 0; $i < count($checked2); $i++) {

                Processing2::create([
                    'id_penawaran' => $kode,
                    'nama_brand' => $request->nama_brand,
                    'proses' => $checked2[$i],
                    'status' => 0,
                ]);
            }
        }
        if($request->cb3 != null){
            $checked3 = $request->cb3;
            for ($i = 0; $i < count($checked3); $i++) {

                Processing3::create([
                    'id_penawaran' => $kode,
                    'nama_brand' => $request->nama_brand,
                    'proses' => $checked3[$i],
                    'status' => 0,
                ]);
            }
        }
        if($request->cb4 != null){
            $checked4 = $request->cb4;
            for ($i = 0; $i < count($checked4); $i++) {

                Processing4::create([
                    'id_penawaran' => $kode,
                    'nama_brand' => $request->nama_brand,
                    'proses' => $checked4[$i],
                    'status' => 0,
                ]);
            }
        }
        if($request->cb5 != null){
            $checked5 = $request->cb5;
            for ($i = 0; $i < count($checked5); $i++) {

                Processing5::create([
                    'id_penawaran' => $kode,
                    'nama_brand' => $request->nama_brand,
                    'proses' => $checked5[$i],
                    'status' => 0,
                ]);
            }
        }
        return redirect("/masterpenawaran");
    }

    public function delete(Request $request , $id)
    {
        $penawaran = Penawaran::withTrashed()->find($id);
        if($penawaran->trashed()){
            $result = $penawaran->restore();
        }else{
            $result = $penawaran->delete();
        }
        if ($result) {
            return redirect('/masterpenawaran');
        } else {
            return redirect('/masterpenawaran');
        }
    }
}
