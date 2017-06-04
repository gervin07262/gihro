<?php

namespace Gihro\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Director
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
      /*if (Auth::guard($guard)->check() ) {
        if(\Auth::user()->user_type_id!=1){
          return view("alerts.msj_no_privileges")->with("msj","No tiene suficientes Privilegios para acceder a esta seccion");
        }
        return $next($request);
      } else {
        return redirect('panel');
      }
    }*/
    if (Auth::guard($guard)->check() && Auth::user()->user_type_id == 1) {
      return $next($request);
    } else {
      return redirect('/');
    }
  }

}
