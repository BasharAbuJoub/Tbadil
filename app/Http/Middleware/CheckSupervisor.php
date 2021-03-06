<?php

namespace App\Http\Middleware;

use Closure;

class CheckSupervisor
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


        if(Auth::user()->role >= 2){
            \Session::flash('flash-msg', 'عذراً, لا يوجد صلاحية لدخول الصفحة');
            return redirect('/');
        }

        return $next($request);
    }
}
