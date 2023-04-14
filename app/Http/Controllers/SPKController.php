<?php

namespace App\Http\Controllers;

use App\Models\Desain;
use App\Models\SPK;
use Illuminate\Http\Request;

class SPKController extends Controller
{
    public function showBrand()
    {
        $desain = Desain::where('status_desain', '1')->get();
        $spk = SPK::all();
        return view('suratperintahkerja', compact('desain','spk'));
    }

    public function doAddSPK(Request $req)
    {

        SPK::create([
            'no_spk' => $req->no_spk,
            'id_penawaran'=>$req->id_penawaran,
            'pic'=>$req->pic,
            'jenis_box'=>$req->jenis_box,
            'jum_produksi'=>$req->jum_produksi,
            'link_desain'=>$req->link_desain,
            'pisau'=>$req->pisau,
            'plat'=>$req->plat
        ]);
        return redirect("/suratperintahkerja");
    }
}
