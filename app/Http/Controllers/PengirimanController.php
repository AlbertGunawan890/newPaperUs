<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Models\SPK;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function FunctionName(Type $var = null)
    {
        $pengiriman = Pengiriman::all();
        $spk = SPK::all();
    }
}
