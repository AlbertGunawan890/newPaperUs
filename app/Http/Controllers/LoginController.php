<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $login = $req->user;
        $password =$req->password;
        // $user = modelpegawai::withTrashed()->where('email_pegawai' , $login)->first();
        // if($user==null){
        //     return redirect("/")->with("error","Email anda salah! ");
        // }else{
        //     $role = $user->role_pegawai;
        //     $role = Str::lower(str_replace(' ', '', $role));

        //     if($role==$password){
        //         $req->session()->put('user_now', $user);
        //             $data = json_decode($req->device);
        //             $this->cekActivityLogin( $req->ip(),$data,$user->nama_pegawai);
        //         return View ("/sidebar/dashboard");
        //     }else{
        //         return redirect ("/")->with("error","Password anda salah! ");
        //     }
        // }
        return view("/layouts/master");
    }
}
