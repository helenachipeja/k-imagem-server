<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){
        return view('index',[
        ]);
    }


    public function service(){
        return view('service',[
        ]);
    }


    public function faq(){
        return view('faq',[
        ]);
    }


    public function contact(){
        return view('contact',[
        ]);
    }


    public function checkout(){
        return view('checkout',[
        ]);
    }


    public function sigin(){
        return view('sigin',[
        ]);
    }
}
