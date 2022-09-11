@extends('layout.admin')

@section('title', isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store')}}">
        @csrf

        @if(isset($post))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="Название" value="{{ $post->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="preview"
                   placeholder="Описание поста" value="{{ $post->preview ?? '' }}">
            @error('preview')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description"
                   placeholder="Текст поста" value="{{ $post->description ?? '' }}">
            @error('description')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($post) && $post->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$post->thumbnail)}}">
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
