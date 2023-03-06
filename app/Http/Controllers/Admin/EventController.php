<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventStoreRequest;
use App\Http\Requests\Admin\EventUpdateRequest;
use App\Models\Event;
use App\Models\SecondTeam;
use App\Models\Team;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::with('teams')->get();
        $secondEvents = Event::with('second_teams')->get();

        return view("admin.events.index", [
            "events" => $events,
            "secondEvents" => $secondEvents,
        ]);
    }

    public function create()
    {
        $teams = Team::all();
        $secondTeams = SecondTeam::all();

        return view("admin.events.create", ['teams' => $teams, 'secondTeams' => $secondTeams]);
    }


    public function store(EventStoreRequest $request)
    {
        $this->validate($request, [
            'datetime' => 'required|date',
            'place' => 'nullable|string|max:150',
            'type' => 'nullable|string|max:50',
            'description' => 'string|nullable|max:50',
            'locker_room' => 'nullable|string|max:100',
            'teams' => "nullable|array|min:2|max:2",
            'underline' => 'nullable',
            'second_datetime' => 'nullable|date',
            'second_place' => 'nullable|string|max:150',
            'second_type' => 'nullable|string|max:50',
            'second_description' => 'string|nullable|max:50',
            'second_locker_room' => 'nullable|string|max:100',
            'second_teams' => "nullable|array|min:2|max:2",
        ]);

        $event = Event::create([
            'datetime' => $request->datetime,
            'place' => $request->place,
            'type' => $request->type,
            'description' => $request->description,
            'locker_room' => $request->locker_room,
            'teams' => $request->teams,
            'underline' => $request->underline == 'on' ? 1 : 0,
            'second_datetime' => $request->second_datetime,
            'second_place' => $request->second_place,
            'second_type' => $request->second_type,
            'second_description' => $request->second_description,
            'second_locker_room' => $request->second_locker_room,
            'second_teams' => $request->second_teams,
        ]);

        if($request->teams){
            $event->teams()->attach($request->teams);
        }

        if($request->second_teams){
            $event->second_teams()->attach($request->second_teams);
        }

        return redirect(route("admin.events.index"));
    }


    public function edit(Event $event)
    {
        $selectedTeams = $event->teams;
        $selectedSecondTeams = $event->second_teams;

        $unSelected = Team::all()
            ->filter(function (Team $team) use ($selectedTeams){
                return !in_array($team->id, $selectedTeams->pluck('id')->toArray());
            });
        $unSelectedSecond = SecondTeam::all()
            ->filter(function (SecondTeam $secondTeam) use ($selectedSecondTeams){
                return !in_array($secondTeam->id, $selectedSecondTeams->pluck('id')->toArray());
            });

        return view("admin.events.edit", [
            'event'=>$event,
            'selectedTeams' => $selectedTeams,
            'unSelected' => $unSelected,
            'selectedSecondTeams' => $selectedSecondTeams,
            'unSelectedSecond' => $unSelectedSecond,
        ]);
    }

    public function update(EventUpdateRequest $request, Event $event)
    {
        $request->validate([
            'datetime' => 'required|date',
            'place' => 'nullable|string|max:150',
            'type' => 'nullable|string|max:50',
            'description' => 'string|nullable|max:50',
            'locker_room' => 'nullable|string|max:100',
            'teams' => "nullable|array|min:2|max:2",
            'underline' => 'nullable',
            'second_datetime' => 'nullable|date',
            'second_place' => 'nullable|string|max:150',
            'second_type' => 'nullable|string|max:50',
            'second_description' => 'string|nullable|max:50',
            'second_locker_room' => 'nullable|string|max:100',
            'second_teams' => "nullable|array|min:2|max:2",
        ]);

        $event->update([
            'datetime' => $request->datetime,
            'place' => $request->place,
            'type' => $request->type,
            'description' => $request->description,
            'locker_room' => $request->locker_room,
            'teams' => $request->teams,
            'underline' => $request->underline == 'on' ? 1 : 0,
            'second_datetime' => $request->second_datetime,
            'second_place' => $request->second_place,
            'second_type' => $request->second_type,
            'second_description' => $request->second_description,
            'second_locker_room' => $request->second_locker_room,
            'second_teams' => $request->second_teams,
        ]);

        if($request->teams){
            $event->teams()->sync($request->teams);
        }

        if($request->second_teams){
            $event->second_teams()->sync($request->second_teams);
        }

        return redirect(route("admin.events.index"));
    }


    public function destroy(Event $event, SecondEvent $secondEvent)
    {
        $event->delete();

        return redirect(route("admin.events.index"));
    }
}
