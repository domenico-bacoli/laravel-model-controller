<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //creiamo le funzioni che richiameremo dalle route
    public function index() {

        //qui facciamo l'accesso al db
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
