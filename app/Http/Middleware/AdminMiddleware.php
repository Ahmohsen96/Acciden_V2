<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the admin role
        if (!Auth::check() || !Auth::user()->hasRole('admin')) {
            return redirect('/'); // Redirect if not admin
        }

        return $next($request);
    }
}

