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
        return view('user.signup');
    }

    /**
     * Method User Profile : personal area user
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        return view('user.profile');
    }
}