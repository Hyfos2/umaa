<?php

namespace App\Http\Middleware;

use Closure;

class CheckType
{
    
    public function handle($request, Closure $next)
    {

        if($request->userTypeId ==1)
        {
            return view('admin.index');
        }
        else{
            return view('landlords.index');
        }
        return $next($request);
    }
}
