<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\Enums\Roles\RoleTypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class CheckTeacher
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == RoleTypes::TEACHER ) {
            return $next($request);
        }
        return redirect(route('login'));
    }
}
