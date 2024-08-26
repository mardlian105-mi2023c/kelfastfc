<?php

namespace App\Http\Controllers;

use App\Models\PostHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = PostHome::all();
        return view('admin_home.index', compact('posts'));
    }

    public function create()
    {
        return view('admin_home.create');
    }

    public function home()
    {
        $posts = PostHome::all();
        return view('home', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageName = null;
        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        PostHome::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin_home.index')->with('success', 'Post created successfully.');
    }

    public function edit(PostHome $postHome)
    {
        return view('admin_home.edit', compact('postHome'));
    }

    public function update(Request $request, PostHome $postHome)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageName = $postHome->image;
        if ($request->file('image')) {
            if ($imageName) {
                unlink(public_path('images') . '/' . $imageName);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $postHome->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin_home.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(PostHome $postHome)
    {
        if ($postHome->image) {
            unlink(public_path('images') . '/' . $postHome->image);
        }

        $postHome->delete();
        return redirect()->route('admin_home.index')->with('success', 'Post deleted successfully.');
    }

    public function show($id)
    {
        $post = PostHome::findOrFail($id);
        return view('admin_home.show', compact('post'));
    }
}