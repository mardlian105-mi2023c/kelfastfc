<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(6)->get();  
        
        return view('home', compact('posts'));
    }
}