<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlayerFormRequest;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();

        return view("admin.players.index", [
            "players" => $players,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.players.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PlayerFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerFormRequest $request)
    {
        Player::create($request->validated());

        return redirect(route('admin.players.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Player $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('admin.players.create', [
            'player' => $player,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PlayerFormRequest  $request
     * @param  Player $player
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerFormRequest $request, Player $player)
    {
        $player->update($request->validated());

        return redirect(route('admin.players.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Player $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return redirect(route('admin.players.index'));
    }
}
