@extends('layout.admin')

@section('title', 'Добавить событие')

@section('content')

    <div class="container">
        <div class="row">
                <h1 class="mt-2 mb-3" style="font-weight: bold">Добавить событие</h1>
            <form action="{{route('admin.events.store')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="datetime">Дата и время:</label><br>
                    <input type="datetime-local" class="form-control" name="datetime"
                           placeholder="Дата и время: ">
                    @error('datetime')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="place">Место:</label><br>
                    <input type="text" class="form-control" name="place"
                           placeholder="Место: ">
                    @error('place')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type"> Тип события:</label><br>
                    <input type="text" class="form-control" name="type"
                           placeholder="Тип события: ">
                    @error('type')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description"> Описание:</label><br>
                    <input type="text" class="form-control" name="description"
                           placeholder="Описание: ">
                    @error('description')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room"> Раздевалка:</label><br>
                    <input type="text" class="form-control" name="locker_room"
                           placeholder="Описание: ">
                    @error('locker_room')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room"> Выберите ДВЕ команды:</label><br>
                    <select class="form-select" name="teams[]" multiple="multiple">
                        <option disabled>Выберите команд</option>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                    @error('teams')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <label for="accept">
                    <input type="checkbox" id="my-checkbox" name="underline">
                </label>
                @error('underline')
                <p class="text-red-500">{{$message}}</p>
                @enderror

                <div class="form-group">
                    <label for="datetime">Дата и время:</label><br>
                    <input type="datetime-local" class="form-control" name="second_datetime"
                           placeholder="Дата и время: ">
                    @error('second_datetime')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="place">Второе место:</label><br>
                    <input type="text" class="form-control" name="second_place"
                           placeholder="Второе место: ">
                    @error('second_place')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type">Второй тип события:</label><br>
                    <input type="text" class="form-control" name="second_type"
                           placeholder="Тип события: ">
                    @error('second_type')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Второе описание:</label><br>
                    <input type="text" class="form-control" name="second_description"
                           placeholder="Описание: ">
                    @error('second_description')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="locker_room">Раздевалки:</label><br>
                    <input type="text" class="form-control" name="second_locker_room"
                           placeholder="Раздевалки: ">
                    @error('second_locker_room')
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


