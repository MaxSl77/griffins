<div class="news">
    <a href="{{route('posts.show', $post->id)}}"><img src="{{asset('/storage/'.$post->thumbnail)}}" alt="griffins" class="news__image" /></a>
    <div class="news__description">
        <a href="{{route('posts.show', $post->id)}}" class="news__description-heading">{{$post->title}}</a>
        <p class="news__description-text">{!!$post->preview!!}</p>
    </div>
</div>
