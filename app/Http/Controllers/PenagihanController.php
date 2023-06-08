<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penagihan;
use Illuminate\Http\Request;

class PenagihanController extends Controller
{
    public function show()
    {
        $penagihan = Penagihan::all();
        return view('penagihan', compact('penagihan'));
    }

    public function showBrand()
    {
        $temp = Pembayaran::where('status_pembayaran','1')->value('sisa');
        $pembayaran = [];
        if($temp!='0'){
            $pembayaran = Pembayaran::where('status_pembayaran','=','1')->where('sisa','!=','0')->get();
        }else{
            $pembayaran = Pembayaran::where('status_pembayaran','=','1')->get();
        }
        return view('tambahpenagihan', compact('pembayaran'));
    }

    public function doAddpenagihan(Request $req)
    {
        $penagihan = Penagihan::get();
        $ctr = 1;
        foreach ($penagihan as $p) {
            $ctr = intval(substr($p->id_penagihan, 2)) + 1;
        }
        if ($ctr < 10) {
            $kode = "PH00{$ctr}";
        } else if ($ctr < 100) {
            $kode = "PH0{$ctr}";
        } else {
            $kode = "PH{$ctr}";
        }

        Penagihan::create([
            'id_penagihan'=>$kode,
            'id_penawaran'=>$req->id_penawaran,
            'pic'=>$req->pic,
            'jenis_box'=>$req->jenis_box,
            'jumlah'=>$req->qty,
            'nominal'=>$req->harga,
            'sudah_terbayar'=>$req->sudah_terbayar,
            'sisa_hutang'=>$req->sisa_hutang,
            'jumlah_bayar'=>$req->jumlah_bayar,
            'status_penagihan'=> 0
        ]);

        return redirect("/penagihan");
    }
    public function delete(Request $req, $id)
    {
        $penagihan = Penagihan::withTrashed()->find($id);
        if($penagihan->trashed()){
            $result = $penagihan->restore();
        }else{
            $result = $penagihan->delete();
        }
        if ($result) {
            return redirect('/penagihan');
        } else {
            return redirect('/penagihan');
    public function doEdit(Request $req)
    {
        $kirim = Penagihan::withTrashed()->find($req->d_penagihan);

        $res = $kirim->update([
            "no_spk" => $req->no_surat_jalan,
            "nama_penerima" => $req->nama_penerima,
            "alamat_penerima" => $req->alamat_penerima,
            "qty" => $req->qty
        ]);
        if($res){
        return redirect("/suratjalan");
        }else{
            return redirect("/suratjalan");
        }
    }
}
