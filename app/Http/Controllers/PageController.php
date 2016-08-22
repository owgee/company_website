<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{


    public function home(){
        return view('index');
    }
    public function contacts(){
        return view('website.contact');
    }
    public function portfolio(){
        return view('details.ourportfolios');
    }

    public function clients(){
        return view('website.client');
    }

    public function projects(){
        return view('website.about');
    }

    public function products(){
        return view('website.about');
    }
   public function about(){
       return view('website.about');
   }

    public function costech(){
       return redirect()->away('http://www.costech.or.tz/');
    }

    public function rigel(){
        return redirect()->away('http://www.rigelnetworks.com/');
    }

    public function karibusms(){
        return redirect()->away('http://www.karibusms.com/');
    }

    public function hotleo(){
        return redirect()->away('http://www.hotleo.com/');
    }


    public function mater(){
        return redirect()->away('http://inetstz.com/project&sec=prepaid_metering');
    }

    public function prayer(){
        return redirect()->away('http://www.freeprayer-request.com/');
    }

    public function pspf(){
        return redirect()->away('https://play.google.com/store/apps/details?id=com.pspftz.pspftz&hl=en');
    }

    public function service($service){
        return view('new_website.services.'.$service);
    }

    public function open_page($page){

        return view('new_website.'.$page);
    }
}
