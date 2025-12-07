<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        // if (!session()->has('loginAdmin')) {
        //     return redirect()->route('loginAdmin');
        // }
        // return $next($request);
        // if (session()->get('loginAdmin')['role'] !== 'admin') {
        //     return redirect()->route('loginAdmin');
        // }
        return $next($request);
    }
}
