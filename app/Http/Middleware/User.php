<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        //Role-1 = Admin
        if(Auth::User()->role == 1)
        {
            return redirect()->route('view_admin');
        }

        //Role-2 = User
        if(Auth::User()->role == 2)
        {
            return $next($request);
        }
    }
}
