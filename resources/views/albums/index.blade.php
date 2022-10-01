@extends('layout.app')

@section('title', 'Альбомы')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Альбомы</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="wrap">
                @foreach($albums as $album)
                    <div class="team_list" style="margin: 20px 40px">
                        <a href="{{route('albums.show', $album->id)}}" class="personal_link"
                           style="text-decoration: none">
                            <img class="news__image" src="{{asset('/storage/'.$album->image)}}"
                                 alt="альбом">
                            <div class="number">{{$album->title}}</div>
                            <h5 class="personal_heading">{{$album->body}}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
