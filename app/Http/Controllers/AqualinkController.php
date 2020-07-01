<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AqualinkController extends Controller
{
    public function about()
    {
        return view('front.home.home');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }

    public function sensoMeter()
    {
        return view('front.product.sensometer');
    }

    public function smart()
    {
        return view('front.product.smart');
    }


}
