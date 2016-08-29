<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{


    public function home(){
        return view('index');
    }


    public function product($product){
        return view('new_website.products.'.$product);
    }

    public function service($service){
        return view('new_website.services.'.$service);
    }

    public function open_page($page){

        return view('new_website.'.$page);
    }
}
