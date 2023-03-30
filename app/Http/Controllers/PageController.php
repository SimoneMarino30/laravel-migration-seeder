<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {
    // $movies = Movie::all();
    // dd($movies);
     return view('homepage');   
  }
}

// , compact('movies')