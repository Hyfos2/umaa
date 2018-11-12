<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->userTypeId  ==1) {
            return redirect('/admin-dashboard');
        }

        if (Auth::guard($guard)->check() && Auth::user()->userTypeId  ==4) {
            return redirect('/accounts-dashboard');
        }

        if (Auth::guard($guard)->check() && Auth::user()->userTypeId  ==5) {
            return redirect('/education-dashboard');
        }
        if(Auth::guard($guard)->check() && Auth::user()->userTypeId  ==2) {
            return redirect('/welcome');
        }

        return $next($request);
    }
}
