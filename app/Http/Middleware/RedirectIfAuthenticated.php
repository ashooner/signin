<?php

namespace App\Http\Middleware;

use Closure;
use URL;
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
//        if (!Auth::guard($guard)->check() && (URL::current() != '/signin/login')) {
//            return redirect('/signin/login');
//        }


        if ( env('APP_ENV') != 'local' ) {
            if (Auth::guard($guard)->check()) {
                return redirect()->route('home');
            } else {
                return redirect('/signin/login');
            }

        } else {
            if (Auth::guard($guard)->check()) {
                return redirect()->route('home');
            }

        }

        return $next($request);
    }
}
