<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
        $user = $request->user();
        
        if($user && $user->email == 'mglrahul@gmail.com'){
            //return $next($request);
        }
        die;
        abort(403, 'No way.');
    }
}
