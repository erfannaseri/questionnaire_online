<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Services\Enums\Roles\RoleTypes;

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


            if (Auth::user()->role == RoleTypes::ADMIN) {
                return redirect(route('admin.panel'));
            }

            if (Auth::user()->role == RoleTypes::STUDENT) {
                return redirect(route('student.panel'));
            }

            if (Auth::user()->role == RoleTypes::TEACHER) {

                return redirect(route('teacher.panel'));
            }
        }

        return $next($request);
    }
}
