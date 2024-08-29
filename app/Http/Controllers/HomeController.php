<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the latest blog post
        $latestPost = Post::latest()->first();
        // Pass the variable to the view
        return view('index', compact('latestPost'));
    }
}
