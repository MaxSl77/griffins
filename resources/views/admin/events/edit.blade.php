@extends('layout.admin')

@section('title', 'Изменить событие')

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="mt-2 mb-3" style="font-weight: bold">Редактировать событие</h1>
            <form action="{{route('admin.events.update', $event->id)}}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="datetime">Дата и время:</label><br>
                    <input type="datetime-local" class="form-control" name="datetime"
                           placeholder="Дата и время: " value="{{old('datetime', $event->datetime)}}">
                    @error('datetime')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="place">Место:</label><br>
                    <input type="text" class="form-control" name="place"
                           placeholder="Место: " value="{{old('place', $event->place)}}">
                    @error('place')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type"> Тип события:</label><br>
                    <input type="text" class="form-control" name="type"
                           placeholder="Тип события: " value="{{old('type', $event->type)}}">
                    @error('type')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description"> Описание:</label><br>
                    <input type="text" class="form-control" name="description"
                           placeholder="Описание: " value="{{old('description', $event->description)}}">
                    @error('description')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room"> Раздевалка:</label><br>
                    <input type="text" class="form-control" name="locker_room"
                           placeholder="Описание: " value="{{old('locker_room', $event->locker_room)}}">
                    @error('locker_room')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room"> Выберите ДВЕ команды:</label><br>
                    <select class="form-select" name="teams[]" multiple="multiple">
                        <option disabled>Выберите команд</option>

                        @foreach($selectedTeams as $team)
                            <option value="{{$team->id}}" selected>{{$team->name}}</option>
                        @endforeach

                        @foreach($unSelected as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                    @error('teams')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <label for="accept">
                    <input type="checkbox" id="my-checkbox" name="underline" {{ $event->underline == 1 ? 'checked' : '' }}>
                </label>
                @error('underline')
                <p class="text-red-500">{{$message}}</p>
                @enderror

                <div class="form-group">
                    <label for="datetime">Дата и время:</label><br>
                    <input type="datetime-local" class="form-control" name="second_datetime"
                           placeholder="Дата и время: " value="{{old('second_datetime', $event->second_datetime)}}">
                    @error('second_datetime')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="place">Второе место:</label><br>
                    <input type="text" class="form-control" name="second_place"
                           placeholder="Место: " value="{{old('second_place', $event->second_place)}}">
                    @error('second_place')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type">Второй тип события:</label><br>
                    <input type="text" class="form-control" name="second_type"
                           placeholder="Второй тип события: " value="{{old('second_type', $event->second_type)}}">
                    @error('second_type')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Второе описание:</label><br>
                    <input type="text" class="form-control" name="second_description"
                           placeholder="Второе описание: " value="{{old('second_description', $event->second_description)}}">
                    @error('second_description')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room">Раздевалки:</label><br>
                    <input type="text" class="form-control" name="second_locker_room"
                           placeholder="Раздевалки: " value="{{old('second_locker_room', $event->second_locker_room)}}">
                    @error('second_locker_room')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room"> Выберите ДВЕ команды:</label><br>
                    <select class="form-select" name="second_teams[]" multiple="multiple">
                        <option disabled>Выберите команд</option>

                        @foreach($selectedSecondTeams as $secondTeam)
                            <option value="{{$secondTeam->id}}" selected>{{$secondTeam->second_name}}</option>
                        @endforeach

                        @foreach($unSelectedSecond as $secondTeam)
                            <option value="{{$secondTeam->id}}">{{$secondTeam->second_name}}</option>
                        @endforeach
                    </select>
                    @error('second_teams')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
            </form>
        </div>
    </div>

@endsection


