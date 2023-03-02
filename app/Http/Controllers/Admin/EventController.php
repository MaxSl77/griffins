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
        $this->validate($request, [
            'datetime' => 'required|date',
            'place' => 'required|string|max:150',
            'type' => 'string|max:50',
            'description' => 'string|nullable|max:50',
            'locker_room' => 'string|max:100',
            'teams' => "nullable|array|min:2|max:2",
        ]);

        $event = Event::create([
            'datetime' => $request->datetime,
            'place' => $request->place,
            'type' => $request->type,
            'description' => $request->description,
            'locker_room' => $request->locker_room,
            'teams' => $request->teams,
            'underline' => $request->underline == 'on' ? 1 : 0
        ]);

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
        $request->validate([
            'datetime' => 'required|date',
            'place' => 'required|string|max:150',
            'type' => 'string|max:50',
            'description' => 'string|nullable|max:50',
            'locker_room' => 'string|max:100',
            'teams' => "nullable|array|min:2|max:2",
        ]);

        $event->update([
            'datetime' => $request->datetime,
            'place' => $request->place,
            'type' => $request->type,
            'description' => $request->description,
            'locker_room' => $request->locker_room,
            'teams' => $request->teams,
            'underline' => $request->underline == 'on' ? 1 : 0
        ]);

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
