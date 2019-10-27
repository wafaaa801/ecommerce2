<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function shopper()
    {
        return view('shop');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function contactus()
    {
        return view('contact');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
