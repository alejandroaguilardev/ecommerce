<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckOut
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
        if(session()->has('cart')){
            foreach(session()->get('cart') as $key){
                if($key['cantidad']>0){
                    return $next($request);
                }
            }
        }
            return redirect()->route('product.index');
    }
}
