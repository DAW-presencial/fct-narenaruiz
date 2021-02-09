<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class saludo
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
        echo "Hola Usuario, como estas?";
        return $next($request);
    }
}
