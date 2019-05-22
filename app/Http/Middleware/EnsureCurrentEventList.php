<?php

namespace App\Http\Middleware;

use App\Event;
use App\Scopes\CurrentEventListScope;
use Closure;
use Illuminate\Database\Eloquent\Builder;

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
        $id = $request->route()->parameter('user_domain')->id;

        Event::addGlobalScope(function (Builder $builder) use ($id) {
            $builder->where('event_list_id', $id);
        });

        return $next($request);
    }
}
