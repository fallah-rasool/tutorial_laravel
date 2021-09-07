<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class chaek
{

    public function handle(Request $request, Closure $next)
    {

        echo '<br>'.'isChaek';
        return $next($request);
    }
}
