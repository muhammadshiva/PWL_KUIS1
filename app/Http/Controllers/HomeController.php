<?php

namespace App\Http\Controllers;
use App\Models\Post; // Calling the model Post
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){ // to calling function from web.php
        return view('index', ['posts' => Post::index()]);
        // Return the view which is index, then create a variable 
        // that keeps Model Post and Post's index

    }

    public function show() {
        return view('video-page', ['posts' => Post::videoprev()]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

}
