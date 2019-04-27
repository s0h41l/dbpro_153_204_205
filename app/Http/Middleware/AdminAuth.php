<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;


use Closure;

class AdminAuth
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

        if($user=Auth::User()){
            if(!$user->isAdmin()){
                return redirect('/404');
            }
        }else{
            return redirect('/404');
        }

        return $next($request);
    }
}
