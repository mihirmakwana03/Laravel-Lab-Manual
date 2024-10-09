<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $uname = $request->route('uname');
        $pass = $request->route('pass');

        if ($uname == 'admin' && $pass == 'admin') {
            return $next($request);
        }
        
        return redirect('/redirect');
    }
}
