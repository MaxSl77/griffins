@extends('layout.app')

@section('title', 'Главная')

@section('content')
    @include('partials.header')
    @include('partials.slider')
    @include('partials.info')

    <section class="main">
        <h2 class="main__title">главная</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            @foreach($posts as $post)
                @include('posts.partials.item', ['post'=>$post])
            @endforeach
        </div>
    </section>

    @include('partials.sponsors')
    @include('partials.footer')
@endsection
