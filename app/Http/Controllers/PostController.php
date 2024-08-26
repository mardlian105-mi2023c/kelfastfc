<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function blog()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }

    public function home()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function admin()
    {
        $posts = Post::all();
        return view('admin', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $imageName);
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $post->image = $imageName;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $post->image,
        ]);

        return redirect()->route('admin')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete('public/images/' . $post->image);
        }

        $post->delete();

        return redirect()->route('admin')->with('success', 'Post deleted successfully.');
    }
}