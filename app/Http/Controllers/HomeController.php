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
	 public function makeorders()
    {
        return view('makeorders');
    }
	 public function makeorders2()
    {
        return view('makeorders2');
    }
	public function invoice()
    {
        return view('invoice');
    }
	public function report()
    {
        return view('report');
    }
}
