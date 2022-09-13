@extends('layout.admin')

@section('title', isset($attribute) ? "Редактировать атрибутику ID {$attribute->id}" : 'Добавить атрибутику')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($attribute) ? "Редактировать атрибутику ID {$attribute->id}" : 'Добавить атрибутику'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($attribute) ? route('admin.attributes.update', $attribute->id) : route('admin.attributes.store')}}">
        @csrf

        @if(isset($attribute))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="Наименование" value="{{ $attribute->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price"
                   placeholder="Цена" value="{{ $attribute->price ?? '' }}">

            @error('price')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="category"
                   placeholder="Категория" value="{{ $attribute->category ?? '' }}">

            @error('category')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
{{--        <div class="form-group">--}}
{{--            <input type="text" class="form-control" name="preview"--}}
{{--                   placeholder="Описание игрока" value="{{ $attribute->preview ?? '' }}">--}}
{{--            @error('preview')--}}
{{--            <p class="text-red-500">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
        <div class="form-group">
            <input type="text" class="form-control" name="description"
                   placeholder="Биография" value="{{ $attribute->description ?? '' }}">
            @error('description')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($attribute) && $attribute->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$attribute->thumbnail)}}">
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
