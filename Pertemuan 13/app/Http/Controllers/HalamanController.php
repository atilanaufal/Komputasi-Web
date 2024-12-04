<?php

namespace App\Http\Controllers;



class HalamanController extends Controller
{
    public function home() {
        return view('home_p13');
    }
    public function about() {
        return view('about_p13');
    }
    public function contact() {
        return view('contact_p13');
    }

}
