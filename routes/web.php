<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Event;
use App\Http\Middleware\EnsureCurrentEventList;


// Marketing website hosted on eventlist.com

Route::domain('eventlist.test')->group(function () {

    Route::get('/', 'MarketingController@home');
    Route::get('/features', 'MarketingController@features');
    Route::get('/pricing', 'MarketingController@pricing');

});


// API endpoints all accessible via api.eventlist.com
// Auth user via default Laravel auth

Route::domain('api.eventlist.test')->group(function () {

    Route::get('/', 'ApiController@index');
    Route::get('/event/{id}', 'ApiController@event');

});


// USER GENERATED Sites
// parisrockshows.com, concerts-madrid.com

Route::domain('{user_domain}')
    ->middleware(EnsureCurrentEventList::class)
    ->group(function() {

    Route::get('/', 'Tenant\EventController@home');
    Route::get('/events', 'Tenant\EventController@index');
    Route::get('/event/{event}', 'Tenant\EventController@show')->name('event');

    Route::get('/link', function() {
        return route('event', [
            'event' => 1
        ]);
    });

});


