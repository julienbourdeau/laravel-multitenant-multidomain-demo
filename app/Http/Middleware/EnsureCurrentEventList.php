<?php

namespace App\Http\Middleware;

use App\Event;
use App\Scopes\CurrentEventListScope;
use Closure;
use Illuminate\Support\Facades\URL;

class EnsureCurrentEventList
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
        $eventList = $request->route()->parameter('user_domain');

        $scope = new CurrentEventListScope($eventList->id);

        Event::addGlobalScope($scope);

        return $next($request);
    }
}
