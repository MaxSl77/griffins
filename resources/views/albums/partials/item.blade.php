<div class="news">
    <a href="{{route('albums.show', $album->id)}}"><img src="{{asset('/storage/'.$album->image)}}" alt="griffins" class="news__image" /></a>
    <div class="news__description">
        <a href="{{route('albums.show', $album->id)}}" class="news__description-heading">{{$album->title}}</a>
        <p class="news__description-text">{!!$album->body!!}</p>
    </div>
</div>
