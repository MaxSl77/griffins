<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\storeTeamsRequest;
use App\Http\Requests\Admin\Team\updateTeamsRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();

        return view("admin.teams.index", [
            "teams" => $teams,
        ]);
    }


    public function create()
    {
        return view("admin.teams.create", []);
    }


    public function store(storeTeamsRequest $request)
    {
        Team::create($request->validated());

        return redirect(route("admin.teams.index"));
    }


    public function edit(Team $team)
    {
        return view("admin.teams.edit", [
            "team" => $team,
        ]);
    }


    public function update(updateTeamsRequest $request, Team $team)
    {
        $team->update($request->validated());

        return redirect(route("admin.teams.index"));
    }


    public function destroy(Team $team)
    {
        $team->delete();

        return redirect(route("admin.teams.index"));
    }
}
