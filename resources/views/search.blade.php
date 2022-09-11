@extends('layout.app')

@section('title', 'Поиск')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">поиск</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            @foreach($posts as $post)
                @include('posts.partials.item', ['post'=>$post])
            @endforeach
            @foreach($coaches as $coach)
                @include('coaches.partials.item', ['coach'=>$coach])
            @endforeach
            @foreach($players as $player)
                @include('players.index', ['player'=>$player])
            @endforeach
            @foreach($attributes as $attribute)
                @include('attributes.index', ['attribute'=>$attribute])
            @endforeach
            @foreach($photos as $photo)
                @include('photos.index', ['photo'=>$photo])
            @endforeach
        </div>
    </section>

    @include('partials.footer')
@endsection
