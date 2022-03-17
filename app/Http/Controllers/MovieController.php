<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    // ROTTA PER I MOVIES
    public function index()
    {

        return view('movies.index', compact('movies'));
    }
}
