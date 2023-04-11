<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DesainController extends Controller
{
    public function showBrand()
    {
        $pembayaran = Pembayaran::where('status_pembayaran', '1')->get();
        return view('tambahdesain', compact('pembayaran'));
    }
}
