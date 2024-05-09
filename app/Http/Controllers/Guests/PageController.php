<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class PageController extends Controller
{
    public function index() {


        $movie = Movie::all();
        dd($movie);
        return view('welcome');
    }
}
