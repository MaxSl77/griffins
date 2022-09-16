@extends('layout.admin')

@section('title',isset($timetable) ? "Редактировать расписание" : 'Добавить расписание')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($timetable) ? "Редактировать расписание" : 'Добавить расписание'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($timetable) ? route('admin.timetables.update', $timetable->id) : route('admin.timetables.store')}}">
        @csrf

        @if(isset($timetable))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="start_at"
                   placeholder="Дата" value="{{ $timetable->start_at ?? '' }}">

            @error('start_at')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>

        @if(isset($timetable) && $timetable->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$timetable->thumbnail)}}">
            </div>
        @endif
        <div class="form-group">
            <input type="file" class="form-control-file" name="thumbnail">

            @error('thumbnail')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="day_of_the_week"--}}
{{--                   placeholder="День" value="{{ $timetable->day_of_the_week ?? '' }}">--}}
{{--            <select type="text" class="form-control" name="day_of_the_week"--}}
{{--                    value="{{ $timetable->day_of_the_week ?? '' }}">--}}
{{--                <option selected>Понедельник</option>--}}
{{--                <option>Вторник</option>--}}
{{--                <option>Среда</option>--}}
{{--                <option>Четверг</option>--}}
{{--                <option>Пятница</option>--}}
{{--                <option>Суббота</option>--}}
{{--                <option>Воскресенье</option>--}}
{{--            </select>--}}


{{--            @error('day_of_the_week')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="time"--}}
{{--                   placeholder="Время" value="{{ $timetable->time ?? '' }}">--}}
{{--            @error('time')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="place"--}}
{{--                   placeholder="Место" value="{{ $timetable->place ?? '' }}">--}}
{{--            @error('description')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="type"--}}
{{--                   placeholder="Тип" value="{{ $timetable->type ?? '' }}">--}}
{{--            @error('type')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="locker_room"--}}
{{--                   placeholder="Раздевалка" value="{{ $timetable->locker_room ?? '' }}">--}}
{{--            @error('locker_room')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="teams"--}}
{{--                   placeholder="Команда" value="{{ $timetable->teams ?? '' }}">--}}
{{--            @error('teams')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--            <div class="form-group">--}}
{{--                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$team->logo)}}">--}}
{{--            </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="file" class="form-control-file" name="logo">--}}

{{--            @error('logo')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$team->logo)}}">--}}
{{--            </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="file" class="form-control-file" name="logo">--}}

{{--            @error('logo')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
