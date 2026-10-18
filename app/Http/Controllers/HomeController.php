<?php

namespace App\Http\Controllers;

use App\Models\HeroPoster;
use App\Models\Toy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posters = HeroPoster::getAllPosters();
        
        $toys = Toy::latest()->take(10)->get();

        return view('page.home', compact('posters', 'toys'));
    }
}