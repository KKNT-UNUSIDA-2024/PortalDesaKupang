<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
    // Show the form for creating a new post
    public function create()
    {
        return view('admin.posts.create');
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        // Create a new post
        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    // Show the form for editing the specified post
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    // Update the specified post in storage
    public function update(Request $request, Post $post)
    {
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        // Update post
        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    // Handle image upload from TinyMCE
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);

        $file = $request->file('file');
        $path = $file->store('public/images');
        $url = Storage::url($path);

        return response()->json(['location' => $url]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }


    public function indexhome()
    {
        $latestPost = Post::latest()->first(); // Mengambil postingan terbaru
        return view('index', ['latestPost' => $latestPost]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function allPosts()
{
    $posts = Post::paginate(1); // Mengambil semua postingan dengan pagination
    return view('posts.index', compact('posts'));
}

}

