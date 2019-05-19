<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function home()
    {
        return view('marketing.home');
    }

    public function features()
    {
        return view('marketing.features');
    }

    public function pricing()
    {
        return view('marketing.pricing');
    }
}
