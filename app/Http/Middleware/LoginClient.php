<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('cliente_alta_moda')){
            return $next($request);
        }else{
            return redirect()->route('login.index');
        }
    }
}
