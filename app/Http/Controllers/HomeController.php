<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Train::all();
        return view('home', compact('home'));
    }
}
