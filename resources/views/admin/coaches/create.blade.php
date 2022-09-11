@extends('layout.admin')

@section('title', isset($coach) ? "Редактировать тренера ID {$coach->id}" : 'Добавить тренера')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($coach) ? "Редактировать тренера ID {$coach->id}" : 'Добавить тренера'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($coach) ? route('admin.coaches.update', $coach->id) : route('admin.coaches.store')}}">
        @csrf

        @if(isset($coach))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="ФИО" value="{{ $coach->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="preview"
                   placeholder="Описание тренера" value="{{ $coach->preview ?? '' }}">
            @error('preview')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description"
                   placeholder="Биография" value="{{ $coach->description ?? '' }}">
            @error('description')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($coach) && $coach->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$coach->thumbnail)}}">
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
