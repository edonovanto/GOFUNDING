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
        return view('layouts.home');
    }

    public function home()
    {
        return view('content.home');
    }

    public function profile()
    {
        return view('content.profile');
    }

    public function buat()
    {
        return view('content.buat_proposal');
    }

    public function setting()
    {
        return view('content.setting');
    }
}
