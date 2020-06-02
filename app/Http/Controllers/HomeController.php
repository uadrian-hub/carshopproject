<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\ModelCar;
use App\Brand;
use App\Body;
use App\CarImage;
use App\Condition;
use App\Offer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('theme.home');
    }

    public function blog()
    {
        return view('theme.blog.index');
    }

    public function about()
    {
        return view('theme.faq.about');
    }

    public function contact()
    {
        return view('theme.faq.contact');
    }

  



} // End Of Controller
