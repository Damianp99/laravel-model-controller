<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    // ROTTA PER I MOVIES
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
}
