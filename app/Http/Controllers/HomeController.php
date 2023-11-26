<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(Request $request)
    {
        return view('home');
    }

    public function about(Request $request)
    {
        return view('about');
    }

    public function projects(Request $request)
    {
        return view('projects');
    }
        public function contact(Request $request)
    {
        return view('contact');
    }
}
