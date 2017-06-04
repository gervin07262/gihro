<?php

namespace Gihro\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Kid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
       if (Auth::guard($guard)->check() && Auth::user()->user_type_id == 3) {
         return $next($request);
       } else {
         return redirect('/');
       }
     }

}
