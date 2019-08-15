<?php

namespace Storelaravel\Http\Controllers;

use Illuminate\Http\Request;
use Storelaravel\ShoppingCart;

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

}
