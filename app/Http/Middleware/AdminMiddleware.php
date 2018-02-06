<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::user()->User_type == 'User')
        {
            return redirect()->guest('/user');
//            return redirect()->intended('/user');


        }elseif (Auth::user()->User_type == 'Admin')
            {
                return redirect()->guest('/admin');

//                return redirect()->intended('/admin');

            }

        return $next($request);
        //return redirect()->guest('/');
    }
}
