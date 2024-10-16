<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next){
        if(Auth::check()){
            if(Auth::user()->is_role == 1){
                return $next($request);
            }else{
                Auth::logout();
                return redirect(url('/'));
            }
        }else{
            Auth::logout();
            return redirect(url('/'));
        }
    }
}

