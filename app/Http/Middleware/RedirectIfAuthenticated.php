<?php

namespace Gihro\Http\Middleware;

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
            $actual_user = \Auth::user();
            switch ($actual_user->user_type_id) {
              case 1:
                return redirect('panelDirectors/profile/'.session('director_id').'/edit');
                break;
              case 2:
                return redirect('panelTeachers/profile/'.session('teacher_id').'/edit');
                break;
              default:
                return redirect('panelKids/profile/'.session('kid_id').'/edit');
                break;
            }
        }

        return $next($request);
    }
}
