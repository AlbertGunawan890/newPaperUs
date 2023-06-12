<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
class SuperAdminMiddleware
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
        if($role=="superadmin"){
            return $next($request);
        }else{
            return redirect('/home')->with('error','You do not have permission to do that!');
        }
    }
}
