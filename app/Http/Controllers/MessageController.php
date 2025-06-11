<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        // Paginate messages with 10 items per page
        $messages = Message::with('user')
            ->latest()
            ->paginate(10);  // Changed from get() to paginate()
            
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Message::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    // Optional: If you need to customize the pagination view
    protected function paginationView()
    {
        return 'vendor.pagination.custom'; // You can create a custom pagination view
    }
}