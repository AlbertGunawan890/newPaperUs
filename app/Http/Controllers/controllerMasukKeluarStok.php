<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerMasukKeluarStok extends Controller
{
    public function showmasuk()
    {
        return view("barangmasuk");
    }
    public function showkeluar()
    {
        return view ("barangkeluar");
    }
    public function doaddmasuk(Request $req)
    {
        
    }
    public function dooaddkeluar(Request $req)
    {
        
    }
}
