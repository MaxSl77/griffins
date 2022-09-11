<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('players.index', [
            "players" => $players,
        ]);
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);

        return view('players.show', [
            "player" => $player,
        ]);
    }
}
