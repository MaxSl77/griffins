@extends('layout.app')

@section('title', 'Фотографии')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Фотографии</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="main">
                <div class="wrap">
                    <div class="news">
                        @foreach($photos as $photo)
                            <a href="{{route('photos.show', $photo->id)}}" style="text-decoration: none; color: #181133">
                                <img src="{{asset('/storage/'.$photo->thumbnail)}}" alt="griffins" class="news__image"/>
                                <div class="news__description">
                                    <p class="news__description-text" style="font-weight: bold">{{$photo->title}}</p>
                                    <p class="news__description-text">{!!$photo->preview!!}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('partials.footer')
@endsection
