<?php

namespace App\Http\Controllers;

use App\Models\Desain;
use App\Models\Processing1;
use App\Models\Processing2;
use App\Models\SPK;
use Illuminate\Http\Request;

class SPKController extends Controller
{
    public function showBrand()
    {
        $desain = Desain::where('status_desain', '1')->get();
        $spk = SPK::all();
        $spk = SPK::join('processing1', 'processing1.id_penawaran', '=', 'master_spk.id_penawaran')->get();
        $proces1 = Processing1::paginate(5);
        $proces2 = Processing2::paginate(5);
        return view('suratperintahkerja', compact('desain','spk','proces1','proces2'));
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
