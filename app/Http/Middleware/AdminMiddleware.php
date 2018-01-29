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
        if (Auth::user()->user_type == 'User')
        {

            return redirect()->intended('/user');


        }elseif (Auth::user()->user_type == 'Admin')
            {

                return redirect()->intended('/admin');

            }

        return $next($request);
        //return redirect()->guest('/');
    }
}
