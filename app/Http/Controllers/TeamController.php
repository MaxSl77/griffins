<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

    }

    public function show(Team $team)
    {
        //
    }


    public function edit(Team $team)
    {
        //
    }


    public function update(Request $request, Team $team)
    {
        //
    }


    public function destroy(Team $team)
    {
        //
    }
}
