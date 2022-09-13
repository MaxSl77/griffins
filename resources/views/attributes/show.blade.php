@extends('layout.app')

@section('title', $attribute->title)

@section('content')
    @include('partials.header')

    <div class="main">
        <div class="main__wrapper" style="display: flex; flex-direction: column; flex-wrap: wrap">
            <div class="news" style="display: flex; flex-direction: column; flex-wrap: wrap; text-align: center">
                <img src="{{asset('/storage/'.$attribute->thumbnail)}}" alt="griffins" class="news__image" />
                <div class="news__description">
                    <p class="news__description-text" style="font-weight: bold">{{$attribute->title}}</p>
{{--                    <p class="news__description-text" style="font-weight: bold">{{$attribute->num}}</p>--}}
                    <p class="news__description-text">{!!$attribute->category!!}</p>
                    <div class="number">{{$attribute->price}}</div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
