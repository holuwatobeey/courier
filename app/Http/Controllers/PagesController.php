<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about');
    }
    public function who(){
        return view('who');
    }
    public function careers(){
        return view('careers');
    }
    public function schedule(){
        return view('schedule');
    }
    public function contact(){
        return view('contact');
    }
    public function terms(){
        return view('terms');
    }
}
