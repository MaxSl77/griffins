@extends('layout.app')

@section('title', 'Тренеры')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Тренеры</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            @foreach($coaches as $coach)
                @include('coaches.partials.item', ['coach'=>$coach])
            @endforeach
        </div>
    </section>

    @include('partials.footer')
@endsection
