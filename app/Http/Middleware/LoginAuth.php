<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
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
