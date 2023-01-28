<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Team;
use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    { 
        if(App::getLocale() == 'ar'){
            $categories     = Category::where('lang',1)->get();
            $services       = Service::where('lang',1)->get();
            $about          = About::where('lang',1)->first();
            $teams          = Team::where('lang',1)->get();
            $clients        = Client::where('lang',1)->get();
            $testimonials    = Testimonial::where('lang',1)->get();
            $sliders = Home::where('lang',1)->get();
        }else{
            $categories     = Category::where('lang',2)->get(); 
            $services       = Service::where('lang',2)->get();
            $about          = About::where('lang',2)->first();
            $teams          = Team::where('lang',2)->get();
            $clients        = Client::where('lang',2)->get();
            $testimonials    = Testimonial::where('lang',2)->get();
            $sliders = Home::where('lang',2)->get();
        }
        
        return view('front.home',compact('sliders','categories','services','about','teams','clients','testimonials'));
    }
}
