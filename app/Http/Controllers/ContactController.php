<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    public function index()
    {
        if(App::getLocale() == 'ar'){
            $contact = Contact::where('lang',1)->first();
        }else{
            $contact = Contact::where('lang',2)->first();
        }
        return view('front.contact.index',compact('contact'));
    }
}
