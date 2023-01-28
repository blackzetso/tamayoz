<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index(){

        if(Auth::guest()) {
            return view('admin.login');
        }else{
           return redirect('/admin');
        }
    }
}
