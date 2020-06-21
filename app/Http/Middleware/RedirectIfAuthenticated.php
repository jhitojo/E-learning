<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->role == 'Admin') {
                return redirect () -> route('admin');
            }
            if (Auth::user()->role == 'Dosen') {
                return redirect()->route('dosen');
            }
            if (Auth::user()->role == 'Mahasiswa') {
                return redirect()->route('mahasiswa');
            }

            //return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
