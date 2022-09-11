@extends('layout.app')

@section('title', $photo->title)

@section('content')
    @include('partials.header')

    <div class="main">
        <div class="main__wrapper" style="display: flex; flex-direction: column; flex-wrap: wrap">
            <div class="news" style="display: flex; flex-direction: column; flex-wrap: wrap; text-align: center">
                <img src="{{asset('/storage/'.$photo->thumbnail)}}" alt="griffins" class="news__image" />
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
