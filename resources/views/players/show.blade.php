@extends('layout.app')

@section('title', $player->title)

@section('content')
    @include('partials.header')

    <div class="main">
        <div class="main__wrapper" style="display: flex; flex-direction: column; flex-wrap: wrap">
            <div class="news" style="display: flex; flex-direction: column; flex-wrap: wrap; text-align: center">
                <img src="{{asset('/storage/'.$player->thumbnail)}}" alt="griffins" class="news__image" />
                <div class="news__description">
                    <p class="news__description-text" style="font-weight: bold">{{$player->title}}</p>
{{--                    <p class="news__description-text" style="font-weight: bold">{{$player->num}}</p>--}}
                    <p class="news__description-text">{!!$player->description!!}</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
