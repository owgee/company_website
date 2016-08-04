<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    public function software(){
        return view('website.services');

    }

    public function mobile(){
        return view('website.services');

    }

    public function payment(){
        return view('services.payment');

    }

    public function linux(){
        return view('website.services');

    }

    public function database(){
        return view('website.services');

    }

    public function website(){
        return view('website.services');

    }
}
