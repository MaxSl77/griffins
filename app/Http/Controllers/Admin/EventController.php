<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventStoreRequest;
use App\Http\Requests\Admin\EventUpdateRequest;
use App\Models\Event;
use App\Models\Team;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::with('teams')->get();


        return view("admin.events.index", [
            "events" => $events,
        ]);
    }

    public function create()
    {
        $teams = Team::all();

        return view("admin.events.create", ['teams' => $teams]);
    }


    public function store(EventStoreRequest $request)
    {
        $event = Event::create($request->validated());

        if($request->teams){
            $event->teams()->attach($request->teams);
        }

        return redirect(route("admin.events.index"));
    }


    public function edit(Event $event)
    {
        $selectedTeams = $event->teams;

        $unSelected = Team::all()
            ->filter(function (Team $team) use ($selectedTeams){
                return !in_array($team->id, $selectedTeams->pluck('id')->toArray());
            });

        return view("admin.events.edit", [
            'event'=>$event,
            'selectedTeams' => $selectedTeams,
            'unSelected' => $unSelected,
        ]);
    }

    public function update(EventUpdateRequest $request, Event $event)
    {
        $event->update($request->validated());

        if($request->teams){
            $event->teams()->sync($request->teams);
        }

        return redirect(route("admin.events.index"));
    }


    public function destroy(Event $event)
    {
        $event->delete();

        return redirect(route("admin.events.index"));
    }
}
