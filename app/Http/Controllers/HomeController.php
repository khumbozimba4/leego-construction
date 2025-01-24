<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
    public function home()
    {
        return view('welcome');
    }
    public function projects()
    {
        return view('projects');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
}
