<?php

namespace App\Http\Controllers;

use App\Models\Desain;
use App\Models\masukkeluarstok;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DesainController extends Controller
{
    public function showBrand()
    {
        $pembayaran = Pembayaran::where('status_pembayaran', '1')->get();
        $pisau = masukkeluarstok::where('jenisbarang','Pisau')->get();
        $plat = masukkeluarstok::where('jenisbarang','Plat')->get();
        return view('tambahdesain', compact('pembayaran','pisau','plat'));
    }
    public function show()
    {
       $desain = Desain::all();
        return view('formdesain', compact('desain'));
    }
    public function doAddDesain(Request $req)
    {
        $desain = Desain::get();
        $ctr = 1;
        foreach($desain as $c){
            $ctr = intval(substr($c->id_desain, 2)) + 1;
        }
        if($ctr<10){
            $kode = "DE00{$ctr}";
        }else if($ctr<100){
            $kode = "DE0{$ctr}";
        }else{
            $kode = "DE{$ctr}";
        }

        Desain::create([
            'id_desain' => $kode,
            'id_penawaran'=>$req->id_penawaran,
            'pic'=>$req->pic,
            'jenis_box'=>$req->jenis_box,
            'link_desain'=>$req->link,
            'pisau'=>$req->pisau,
            'plat'=>$req->plat,
            'status_desain'=> 0
        ]);
        return redirect("/formdesain");
    }

    public function delete(Request $request , $id)
    {
        $desain = Desain::withTrashed()->find($id);
        if($desain->trashed()){
            $result = $desain->restore();
        }else{
            $result = $desain->delete();
        }
        if ($result) {
            return redirect('/formdesain');
        } else {
            return redirect('/formdesain');
        }
    }
}
