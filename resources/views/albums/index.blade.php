@extends('layout.app')

@section('title', 'Альбомы')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Альбомы</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            @foreach($albums as $album)
                @include('albums.partials.item', ['album'=>$album])
            @endforeach
        </div>
    </section>

    @include('partials.footer')
@endsection
