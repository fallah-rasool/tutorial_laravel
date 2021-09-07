<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$admin,$manager)
    {

       // dd($admin);
        //echo "isAdmin".'<br>';

       //url : comment?username=admin  --> ok
       // or  
       //url : comment?username=manager --> ok

        // if($request->username==="admin" || $request->username==="manager" ){

        //     return $next($request);

        // }else{

        //     return abort('404');

        // }

        if($admin==="admin" || $manager==="manager" ){

            return $next($request);

        }else{

            return abort('404');

        }

       
    }
}
