<?php

namespace App\Http\Middleware;

use Closure;
use auth;
class CheckUser
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
        if(!Auth::user()->isadmin){
            return redirect()->route('unauthorized');
        }
        return $next($request);
    }
}
