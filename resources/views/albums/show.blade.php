@extends('layout.app')

@section('title', $album->title)

@section('content')
    @include('partials.header')

    <div class="main">
        <h2 class="main__title">{{$album->title}}</h2>
        <div class="main__wrapper" style="display: flex; flex-direction: column; flex-wrap: wrap">
            <hr class="main__line">
            <div class="news">
                @foreach ($photos as $photo)
                    <a href="{{asset("/storage/". $photo->photo)}}"><img src="{{asset("/storage/". $photo->photo)}}" class="news__imag" alt="griffins" srcset=""></a>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
