<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CoachFormRequest;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::all();

        return view("admin.coaches.index", [
            "coaches" => $coaches,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.coaches.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CoachFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoachFormRequest $request)
    {
        Coach::create($request->validated());

        return redirect(route("admin.coaches.index"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Coach $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {
        return view("admin.coaches.create", [
            "coach" => $coach,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CoachFormRequest $request
     * @param  Coach $coach
     * @return \Illuminate\Http\Response
     */
    public function update(CoachFormRequest $request, Coach $coach)
    {
        $coach->update($request->validated());

        return redirect(route("admin.coaches.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Coach $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();

        return redirect(route("admin.coaches.index"));
    }
}
