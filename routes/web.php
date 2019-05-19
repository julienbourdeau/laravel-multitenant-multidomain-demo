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


// Marketing website hosted on eventlist.com

Route::get('/', 'MarketingController@home');
Route::get('/features', 'MarketingController@features');
Route::get('/pricing', 'MarketingController@pricing');


// API endpoints all accessible via api.eventlist.com
// Auth user via default Laravel auth

Route::get('/', function () { return ['up' => true]; });
Route::get('/event/{id}', function ($id) {
    return Event::find($id);
});

// USER GENERATED Sites
// concerts-paris.com, concerts-madrid.com

//Route::get('/', 'Tenant\EventController@home');
//Route::get('/events', 'Tenant\EventController@index');
//Route::get('/event/{event}', 'Tenant\EventController@show');



