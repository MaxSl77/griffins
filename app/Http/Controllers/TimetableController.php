<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index()
    {
        $timetables = Timetable::all();

        return view('timetable.index', [
            "timetables" => $timetables,
        ]);
    }
}
