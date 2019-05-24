<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class RegisterUrlDefaults
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
        $domain = $request->route()->parameter('user_domain')->domain;

        URL::defaults([
            'user_domain' => $domain,
        ]);

        return $next($request);
    }
}
