@extends('layout.admin')

@section('title', 'Изменить команду')

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="mt-2 mb-3" style="font-weight: bold">Изменить команду</h1>
            <form action="{{route('admin.teams.update', $team->id)}}"  method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Название команды:</label><br>
                    <input type="text" class="form-control" name="name"
                           placeholder="Название команды: " value="{{old('name', $team->name)}}">
                    @error('name')
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
