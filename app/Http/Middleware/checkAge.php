<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "global message for all page";
        if($request->age && $request->age<18){
            return redirect('noaccess');
        }
        return $next($request);
    }
}
