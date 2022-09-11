@extends('layout.app')

@section('title', 'Атрибутика')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Атрибутика</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            @foreach($attributes as $attribute)
            <h1 class="attributes__heading">{{$attribute->title}}</h1>
            @endforeach
        </div>
    </section>

    @include('partials.footer')
@endsection
