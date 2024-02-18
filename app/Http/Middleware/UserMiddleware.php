<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->can('pembina') || Auth::user()->can('admin'))) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}

