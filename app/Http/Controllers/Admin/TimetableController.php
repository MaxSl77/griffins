<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTimetableRequest;
use App\Http\Requests\Admin\TimetableFormRequest;
use App\Http\Requests\Admin\UpdateTimetableRequest;
use App\Http\Resources\Admin\TimetableResource;
use App\Models\Timetable;

class TimetableController extends Controller
{
    public function index()
    {
        $timetables = Timetable::all();

        return view("admin.timetable.index", [
            "timetables" => $timetables,
        ]);
    }

    public function create()
    {
        return view("admin.timetable.create", []);
    }


    public function store(TimetableFormRequest $request)
    {
        Timetable::create($request->validated());

        return redirect(route("admin.timetables.index"));
    }

    public function edit(Timetable $timetable)
    {
        return view("admin.timetable.create", [
            "timetable" => $timetable,
        ]);
    }

    public function update(TimetableFormRequest $request, Timetable $timetable)
    {
        $timetable->update($request->validated());

        return redirect(route("admin.timetables.index"));
    }


    public function destroy(Timetable $timetable)
    {
        $timetable->delete();

        return redirect(route("admin.timetables.index"));
    }
}
