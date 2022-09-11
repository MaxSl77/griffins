<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\storeTeamRequest;
use App\Http\Requests\Admin\updateTeamRequest;
use App\Http\Resources\Admin\TeamCollection;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function index()
    {
        //переделать на view
        return new TeamCollection(Team::all());
    }


    public function create()
    {
        //переделать на view - форма добавления команды
    }


    public function store(storeTeamRequest $request)
    {
        Team::create($request->validated());

        return response()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(updateTeamRequest $request, Team $team)
    {
        $team->update($request->validated());

        dd($team);
    }


    public function destroy($id)
    {
        //
    }
}
