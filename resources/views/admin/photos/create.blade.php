@extends('layout.admin')

@section('title', isset($photo) ? "Редактировать альбом ID {$photo->id}" : 'Добавить альбом')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($photo) ? "Редактировать альбом ID {$photo->id}" : 'Добавить альбом'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="post" action=" {{ isset($photo) ? route('admin.photos.update', $photo->id) : route('admin.photos.store')}}">
        @csrf

        @if(isset($photo))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="Название" value="{{ $photo->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="preview"
                   placeholder="Описание альбома" value="{{ $photo->preview ?? '' }}">
            @error('preview')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($photo) && $photo->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$photo->thumbnail)}}">
            </div>
        @endif
        <div class="form-group">
            <input type="file" class="form-control-file" name="thumbnail[]" multiple>

            @error('thumbnail')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
