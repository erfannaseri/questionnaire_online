<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Services\Roles\Enums\RoleTypes;

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
//            return redirect(RouteServiceProvider::HOME);

            if (Auth::user()->role == RoleTypes::ADMIN) {
                return redirect(route('admin.panel',Auth::user()->username));
            }

            if (Auth::user()->role == RoleTypes::STUDENT) {
                return redirect(route('student.panel',Auth::user()->username));
            }

            if (Auth::user()->role == RoleTypes::TEACHER) {
                return redirect(route('teacher.panel',Auth::user()->username));
            }
        }

        return $next($request);
    }
}
