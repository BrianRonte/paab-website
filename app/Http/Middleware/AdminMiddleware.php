<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to access the admin area.');
        }

        // Optional: Check if user is admin (if you add an is_admin column later)
        // if (!auth()->user()->is_admin) {
        //     abort(403, 'Unauthorized access.');
        // }

        return $next($request);
    }
}