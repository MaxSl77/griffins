@extends('layout.app')

@section('title', $album->title)

@section('content')
    @include('partials.header')

    <div class="main">
        <div class="main__wrapper" style="display: flex; flex-direction: column; flex-wrap: wrap">
            <div class="news" style="display: flex; flex-direction: column; flex-wrap: wrap; text-align: center">
                @foreach ($photos as $photo)
                    <img src="{{asset("/storage/". $photo->photo)}}" class="news__image" alt="griffins" srcset="">
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
