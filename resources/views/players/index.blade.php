@extends('layout.app')

@section('title', 'Команда')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Команда</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="wrap">
                <div class="personal">

                    <div class="goalkeeper">
                        <h3 class="golkeeper__heading">Вратари</h3>
                        @foreach($players as $player)
                            @if($player->position == 'Вратарь')
                                <div class="team_list">
                                    <a href="{{route('players.show', $player->id)}}" class="personal_link"
                                       style="text-decoration: none">
                                        <img class="personal_image" src="{{asset('/storage/'.$player->thumbnail)}}"
                                             alt="Вратарь">
                                        <div class="num">{{$player->number}}</div>
                                        <h5 class="personal_heading">{{$player->title}}</h5>
                                        <p class="personal_preview">{{$player->preview}}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="defenders">
                        <h3 class="defenders__heading">Защитники</h3>
                        @foreach($players as $player)
                            @if($player->position == 'Защитник')
                                <div class="team_list">
                                    <a href="{{route('players.show', $player->id)}}" class="personal_link"
                                       style="text-decoration: none">
                                        <img class="personal_image" src="{{asset('/storage/'.$player->thumbnail)}}"
                                             alt="Защитник">
                                        <div class="num">{{$player->number}}</div>
                                        <h5 class="personal_heading">{{$player->title}}</h5>
                                        <p class="personal_preview">{{$player->preview}}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="forwards">
                        <h3 class="forwards__heading">Нападающие</h3>
                        @foreach($players as $player)
                            @if($player->position == 'Нападающий')
                                <div class="team_list">
                                    <a href="{{route('players.show', $player->id)}}" class="personal_link"
                                       style="text-decoration: none">
                                        <img class="personal_image" src="{{asset('/storage/'.$player->thumbnail)}}"
                                             alt="Нападающий">
                                        <div class="num">{{$player->number}}</div>
                                        <h5 class="personal_heading">{{$player->title}}</h5>
                                        <p class="personal_preview">{{$player->preview}}</p>
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
