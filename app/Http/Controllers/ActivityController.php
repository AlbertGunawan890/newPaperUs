<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function formact(Request $request)
    {
        $arrPermission = Permission::all();
        return view("masterrole",compact("arrPermission"));
    }
}
