<?php

namespace App\Http\Controllers;
use App\Models\Contact;

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
    public function contacts(){
        $contacts=Contact::all();
        return view('layouts.app',compact('contacts'));


    }

    public function index()
    {
        return view('home',compact('contacts'));
    }
}
