<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //creiamo le funzioni che richiameremo dalle route
    public function home() {
        return view('home');
    }

    public function index() {
        return view('index');
    }
}
