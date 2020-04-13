<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\Roles\Enums\RoleTypes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
class CheckStudent
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == RoleTypes::STUDENT ) {
            return $next($request);
        }
        return  redirect(route('login'));
    }
}
