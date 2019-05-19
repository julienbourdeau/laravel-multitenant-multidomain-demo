<?php

namespace App\Providers;

use App\Event;
use App\EventList;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('user_domain', function ($value) {
            return EventList::where('domain', $value)->firstOrFail();
        });

        Route::bind('event', function ($value, \Illuminate\Routing\Route $route) {
            return Event::where([
                'id' => $value,
                'event_list_id' => $route->parameter('user_domain')->id,
            ])->first() ?? abort(404);
        });
    }
}
