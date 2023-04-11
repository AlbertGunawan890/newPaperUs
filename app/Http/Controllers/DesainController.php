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
    public function doAddDesain(Request $req)
    {
        $desain = Desain::all();
    }
}
