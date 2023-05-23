<?php

namespace App\Http\Controllers;

use App\Models\Desain;
use App\Models\Processing1;
use App\Models\Processing2;
use App\Models\SPK;
use App\Models\Vendor;
use Illuminate\Http\Request;

class SPKController extends Controller
{
    public function showBrand(Request $request)
    {
        $desain = Desain::where('status_desain', '1')->get();
        $vendor = Vendor::all();
        $no_spk = SPK::all();
        // $arr = [];
        // $arr2 = [];
        // $data = json_decode($request->temp);
        // $spk = SPK::join('processing1', 'processing1.id_penawaran', '=', 'master_spk.id_penawaran')->get();
        // $spk = SPK::join('processing1', 'processing1.id_penawaran', '=', 'master_spk.id_penawaran')->get();
        // for ($i=0; $i < count($spk); $i++) {
        //     $bool = false;

        //     for ($j=0; $j < count($arr); $j++) {
        //         if($spk[$i]->proses==$arr[$j]){
        //             $bool = true;
        //         }
        //     }
        //     if(!$bool){
        //         array_push($arr,$spk[$i]->proses);
        //         array_push($arr2,$spk[$i]);
        //     }
        // }
        // $proces1 = Processing1::paginate(5);
        $proces1 = Processing1::all();
        // if($data == null){
        // }else{
        //     $proces1 = Processing1::where('id_penawaran', $data)->get();
        // }
        $proces2 = Processing2::paginate(5);
        return view('suratperintahkerja', compact('desain','no_spk',/*'spk',*/'proces1','proces2','vendor'));
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
