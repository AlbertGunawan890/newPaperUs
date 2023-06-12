<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function toLoginPage(){
        session()->put('user_now', '');
        return view('login');
    }
    public function login(Request $req)
    {
        $login = $req->user;
        $password =$req->password;
        $user = Pegawai::withTrashed()->where('email_pegawai' , $login)->first();
        if($user==null){
            return redirect("/")->with("error","Email anda salah! ");
        }else{
            $passwordUser = $user->password;
            // $role = Str::lower(str_replace(' ', '', $role));

            if(Hash::check($password, $passwordUser)){
                $req->session()->put('user_now', $user);
                return View ("/layouts/master");
            }else{
                return redirect ("/")->with("error","Password anda salah! ");
            }
        }
    }

    public function logout(Request $request)
    {
        $user = session()->get('user_now');

        session()->forget('user_now');
        return redirect("/");
    }
}
