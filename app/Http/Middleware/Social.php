<?php

namespace App\Http\Middleware;

use Closure;

class Social
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
        $availableProvider = array('facebook', 'github', 'twitter');
        if(in_array($request->provider, $availableProvider))
        {
          return $next($request);
        }
        return abort(404);
    }
}
