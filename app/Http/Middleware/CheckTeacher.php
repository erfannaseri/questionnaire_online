<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\Roles\Enums\RoleTypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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
        if (Auth::check() && Auth::user()->role == RoleTypes::TEACHER && Auth::user()->username  == Request::segment(2)) {
            return $next($request);
        }
        return  redirect(route('error-404'));
    }
}
