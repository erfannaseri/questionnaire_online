<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\Roles\Enums\RoleTypes;
use Illuminate\Support\Facades\Auth;

class CheckTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == RoleTypes::TEACHER) {
            return $next($request);
        }
        return redirect('/');
    }
}
