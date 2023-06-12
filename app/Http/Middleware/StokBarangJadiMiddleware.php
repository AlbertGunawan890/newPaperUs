<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class StokBarangJadiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = $request->session()->get('user_now')->role;
        $role = Str::lower(str_replace(' ', '', $role));
        $cek = Permission::where('daftar_berita',"Stok Barang Jadi")->first();
        if($role=="superadmin"){
            return $next($request);
        }else if($role=="admin"&&$cek->admin==true){
            return $next($request);
        }else if($role=="accounting"&&$cek->accounting==true){
            return $next($request);
        }
        else{
            return redirect('/home')->with('error','You do not have permission to do that!');
        }
    }
}
