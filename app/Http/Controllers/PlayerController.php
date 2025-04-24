<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('position')->latest()->paginate(10);
        return view('player.index', compact('players'));
    }

    public function squad()
    {
        $players = Player::with('position')
                    ->orderBy('position_id')
                    ->orderBy('number')
                    ->paginate(9); // 9 players per page for 3x3 grid
        
        return view('squad', compact('players'));
    }

    public function create()
    {
        $positions = Position::all();
        return view('player.create', compact('positions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|integer|min:1|max:99',
            'position_id' => 'required|exists:positions,id',
            'goal' => 'required|integer|min:0',
            'match' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('player-images', 'public');
        }

        Player::create($validated);

        return redirect()->route('player.index')->with('success', 'Player created successfully!');
    }

    public function show(Player $player)
    {
        return view('player.show', compact('player'));
    }

    public function edit(Player $player)
    {
        $positions = Position::all();
        return view('player.edit', compact('player', 'positions'));
    }

    public function update(Request $request, Player $player)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|integer|min:1|max:99',
            'position_id' => 'required|exists:positions,id',
            'goal' => 'required|integer|min:0',
            'match' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($player->image) {
                Storage::disk('public')->delete($player->image);
            }
            $validated['image'] = $request->file('image')->store('player-images', 'public');
        }

        $player->update($validated);

        return redirect()->route('player.index')->with('success', 'Player updated successfully!');
    }

    public function destroy(Player $player)
    {
        if ($player->image) {
            Storage::disk('public')->delete($player->image);
        }

        $player->delete();

        return redirect()->route('player.index')->with('success', 'Player deleted successfully!');
    }
}