<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
     // throw new Exception("Error Processing Request", 1);
     return view('welcome');
    }

    public function about(){

     return view('about');
    }

    public function contact(){
     return view('contact');
    }
}
