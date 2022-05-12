<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        $data = [
            "movies" => $movies,
            "movie" => new Movie()
        ];

        return view('movies.index', $data);
    }
}
