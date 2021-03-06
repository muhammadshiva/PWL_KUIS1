<?php

namespace App\Http\Controllers;
use App\Models\Post; // Calling the model Post
use App\Models\Testimonial; // Calling the model Testimonial
use App\Models\Feature; // Calling the model Testimonial
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
        return view('about', ['features' => Feature::index()]);
    }

    public function contact() {
        return view('contact', ['testimonials' => Testimonial::index()]);
    }


}
