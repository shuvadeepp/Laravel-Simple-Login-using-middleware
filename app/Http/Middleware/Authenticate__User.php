<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate__User
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
        if (!$request->session()->has('UserSession')) {
            $request->session()->flush();
            $request->session()->regenerate(true);
            return redirect('/');
        }
        return $next($request);
    }
}
