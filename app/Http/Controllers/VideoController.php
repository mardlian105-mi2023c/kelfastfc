<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin_video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        Video::create($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video created successfully.');
    }

    public function edit(Video $video)
    {
        return view('admin_video.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        $video->update($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'Video deleted successfully.');
    }
}