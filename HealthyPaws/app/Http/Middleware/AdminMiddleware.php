<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!auth('admin')->check()) {
            return redirect()->route('admin.login')->with('error', 'Access denied!');
        }

        return $next($request);
    }
}
