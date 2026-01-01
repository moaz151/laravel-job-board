<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class OnlyMe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->email == 'aaa@a.com'){
                // Allow the Request to proceed
                return $next($request);
            }

            return response(["message" => "Access is not proper"], 403);
        }

        return response(["message" => "you don't have access"], 401);
    }
}
