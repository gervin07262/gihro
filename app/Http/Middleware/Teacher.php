<?php

namespace Gihro\Http\Middleware;

use Closure;
use Auth;

class Teacher
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
      if (Auth::guard($guard)->check() && Auth::user()->user_type_id == 2) {
        return $next($request);
      } else {
        // only function redirect to know to other view no works;
        return redirect('/');
      }
    }
}
