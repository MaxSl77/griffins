<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SecondTeam\SecondTeamStoreRequest;
use App\Http\Requests\Admin\SecondTeam\SecondTeamUpdateRequest;
use App\Models\SecondTeam;
use Illuminate\Http\Request;

class SecondTeamController extends Controller
{
    public function index()
    {
        $secondTeams = SecondTeam::all();

        return view('admin.secondTeams.index', [
           'secondTeams' => $secondTeams,
        ]);
    }

    public function create()
    {
        return view("admin.secondTeams.create", []);
    }

    public function store(SecondTeamStoreRequest $request)
    {
        SecondTeam::create($request->validated());

        return redirect(route('admin.secondTeams.index'));
    }

    public function edit(SecondTeam $secondTeam)
    {
        return view('admin.secondTeams.edit', [
            'secondTeam' => $secondTeam,
        ]);
    }

    public function update(SecondTeamUpdateRequest $request, SecondTeam $secondTeam)
    {
        $secondTeam->update($request->validated());
        return redirect(route('admin.secondTeams.index'));
    }

    public function destroy(SecondTeam $secondTeam)
    {
        $secondTeam->delete();

        return redirect(route('admin.secondTeams.index'));
    }
}
