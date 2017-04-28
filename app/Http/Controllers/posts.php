<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posts extends Controller
{
    //
    public function home()
    {
      return view('home');
    }
    
    public function motorsports()
    {
      return view('motorsports');
    }
    
    public function newmodels()
    {
      return view('newmodels');
    }
    
    public function news()
    {
      return view('news');
    }
    
    
    public function memes()
    {
      return view('memes');
    }
}
