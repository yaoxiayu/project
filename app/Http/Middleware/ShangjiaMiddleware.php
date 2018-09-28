<?php

namespace App\Http\Middleware;

use Closure;

class ShangjiaMiddleware
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
        if(\Session::has('sid')){
          return $next($request);
        }else{
            return redirect('/shangjia/login')->with('error','您还没有登录,请登录');
        }
    }
}
