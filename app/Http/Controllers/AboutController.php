<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Client;
use App\Models\Service;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(App::getLocale() == 'ar'){
            $categories     = Category::where('lang',1)->get();
            $services       = Service::where('lang',1)->get();
            $about          = About::where('lang',1)->first();
            $teams          = Team::where('lang',1)->get();
            $clients        = Client::where('lang',1)->get();
            $testimonials    = Testimonial::where('lang',1)->get();
        }else{
            $categories     = Category::where('lang',2)->get(); 
            $services       = Service::where('lang',2)->get();
            $about          = About::where('lang',2)->first();
            $teams          = Team::where('lang',2)->get();
            $clients        = Client::where('lang',2)->get();
            $testimonials    = Testimonial::where('lang',2)->get();
        }
        //dd($about->title);
        $categories_count  =   $categories->count(); 
        return view('front.about.index',compact('about','teams','categories','services','clients','testimonials','categories_count'));
    }
}
