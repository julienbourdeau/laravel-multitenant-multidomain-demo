<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return view('api', ['response' => [
            'up' => true
        ]]);
    }

    public function event($id)
    {
        return view('api', ['response' => [
            'event' => Event::find($id)->toArray(),
        ]]);
    }
}
