<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
}
