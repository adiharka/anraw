<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::check() && Auth::user()->role == 'admin') {
                return redirect()->route('admin.home');
    
            }  
            elseif (Auth::check() && Auth::user()->role == 'guru') {
                return redirect()->route('guru.home');
     
            } 
            elseif (Auth::check() && Auth::user()->role == 'siswa') {
                return redirect()->route('siswa.home');
     
            } 
            // else {
            //     return redirect()->route('landing');
            // }
        
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }
        }

        return $next($request);
    }
}
