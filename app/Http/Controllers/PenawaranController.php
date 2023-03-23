<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function show()
    {
        $arrBrand = Vendor::all();
        return view('tambahpenawaran', compact('arrBrand'));
    }
}
