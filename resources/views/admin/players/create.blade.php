@extends('layout.admin')

@section('title', isset($player) ? "Редактировать игрока ID {$player->id}" : 'Добавить игрока')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($player) ? "Редактировать игрока ID {$player->id}" : 'Добавить игрока'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($player) ? route('admin.players.update', $player->id) : route('admin.players.store')}}">
        @csrf

        @if(isset($player))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="ФИО" value="{{ $player->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="number"
                   placeholder="Номер" value="{{ $player->number ?? '' }}">

            @error('number')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="position"
                   placeholder="Амплуа" value="{{ $player->position ?? '' }}">

            @error('position')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="preview"
                   placeholder="Описание игрока" value="{{ $player->preview ?? '' }}">
            @error('preview')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description"
                   placeholder="Биография" value="{{ $player->description ?? '' }}">
            @error('description')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($player) && $player->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$player->thumbnail)}}">
            </div>
        @endif
        <div class="form-group">
            <input type="file" class="form-control-file" name="thumbnail">

            @error('thumbnail')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
