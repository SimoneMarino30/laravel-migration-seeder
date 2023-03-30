<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class PageController extends Controller
{
    public function homepage() {
    // $movies = Movie::all();
    // dd($movies);
     return view('homepage');   
  }
}

// , compact('movies')