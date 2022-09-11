<div class="news">
    <a href="{{route('coaches.show', $coach->id)}}"><img src="{{asset('/storage/'.$coach->thumbnail)}}" alt="griffins" class="news__image" /></a>
    <div class="news__description">
        <a href="{{route('coaches.show', $coach->id)}}" class="news__description-heading">{{$coach->title}}</a>
        <p class="news__description-text">{!!$coach->preview!!}</p>
    </div>
</div>
