<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class LoginAdminTrue
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */ 

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handle(Request $request, Closure $next)
    {
        // $action_name = $this->router->getRoutes()->match($request)->getActionName();
        // $action_name=explode('@',$action_name);
        if(session()->has('admin_alta_moda')){
            // if($action_name[1]=='adminLogin'){
                return redirect()->route('adminHome');
            // }else{            
            //     return $next($request);
            // }
        }else{
            return $next($request);
        }
    }
}
