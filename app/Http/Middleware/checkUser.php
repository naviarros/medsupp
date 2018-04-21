<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class checkUser
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
       if(Session::get('username') === null){
         return redirect('/login/signin');
      }elseif(Session::get('username') !== null){
        return redirect('/msscontent/dashboard');
      }
        return $next($request);
    }
}
