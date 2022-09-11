<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();

        return view('coaches.index', [
            "coaches" => $coaches,
        ]);
    }

    public function show($id)
    {
        $coach = Coach::findOrFail($id);

        return view('coaches.show', [
            "coach" => $coach,
        ]);
    }
}
