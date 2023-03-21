<?php

namespace App\Http\Controllers;

use App\Models\masukkeluarstok;
use Illuminate\Http\Request;

class stokbarangController extends Controller
{
    public function showstok(Request $request)
    {   
       
        $arrStokpisau = masukkeluarstok::where('jenisbarang',"=","Pisau")->get();
        $arrStokplat = masukkeluarstok::where('jenisbarang',"=","Plat")->get();
        $arrStokkertassisa = masukkeluarstok::where('jenisbarang',"=","Kertas Sisa")->get();
        $arrStokbaranglain = masukkeluarstok::where('jenisbarang',"=","Barang Lain-Lain")->get();
               
        return view('stokbarang',compact('arrStokpisau','arrStokplat','arrStokkertassisa','arrStokbaranglain'));
    }
}
