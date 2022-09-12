@extends('layout.app')

@section('title', 'Атрибутика')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Атрибутика</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <p class="personal_heading-info">* Размеры и наличие узнавайте у председателя или у менеджера клуба</p>
            <div class="wrap">
                <div class="personal">
                    <div class="goalkeeper">
                        <h3 class="golkeeper__heading">Кепки</h3>
                        @foreach($attributes as $attribute)
                            @if($attribute->category == 'Кепка')
                                <div class="team_list">
                                    <a href="{{route('attributes.show', $attribute->id)}}" class="personal_link"
                                       style="text-decoration: none">
                                        <img class="personal_image" src="{{asset('/storage/'.$attribute->thumbnail)}}"
                                             alt="Кепка">
                                        <div class="number">{{$attribute->title}}</div>
                                        <h5 class="personal_heading">{{$attribute->price}}</h5>
                                        {{--                                    <p class="personal_preview">{{$attribute->preview}}</p>--}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="defenders">
                        <h3 class="defenders__heading">Бомберы</h3>
                        @foreach($attributes as $attribute)
                            @if($attribute->category == 'Бомбер')
                                <div class="team_list">
                                    <a href="{{route('attributes.show', $attribute->id)}}" class="personal_link"
                                       style="text-decoration: none">
                                        <img class="personal_image" src="{{asset('/storage/'.$attribute->thumbnail)}}"
                                             alt="Бомбер">
                                        <div class="number">{{$attribute->title}}</div>
                                        <h5 class="personal_heading">{{$attribute->price}}</h5>
                                        {{--                                    <p class="personal_preview">{{$attribute->preview}}</p>--}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="forwards">
                        <h3 class="forwards__heading">Шарфы</h3>
                        @foreach($attributes as $attribute)
                            @if($attribute->category == 'Шарф')
                                <div class="team_list">
                                    <a href="{{route('attributes.show', $attribute->id)}}" class="personal_link"
                                       style="text-decoration: none">
                                        <img class="personal_image" src="{{asset('/storage/'.$attribute->thumbnail)}}"
                                             alt="Шарф">
                                        <div class="number">{{$attribute->title}}</div>
                                        <h5 class="personal_heading">{{$attribute->price}}</h5>
                                        {{--                                    <p class="personal_preview">{{$attribute->preview}}</p>--}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
