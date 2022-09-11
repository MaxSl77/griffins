@extends('layout.app')

@section('title', $post->title)

@section('content')
    @include('partials.header')

    <div class="main">
        <div class="main__wrapper" style="display: flex; flex-direction: column; flex-wrap: wrap">
            <div class="news" style="display: flex; flex-direction: column; text-align: center">
                <img src="{{asset('/storage/'.$post->thumbnail)}}" alt="griffins" class="news__image" />
                <div class="news__description">
                    <p class="news__description-text" style="font-weight: bold">{{$post->title}}</p>
                    <p class="news__description-text">{!!$post->description!!}</p>
                </div>
            </div>
        </div>
    </div>

{{--    <section class="content-item" id="comments">--}}
{{--                    <form method="POST" action="{{route('comment', $post->id)}}" class="decor">--}}
{{--                        @csrf--}}

{{--                        <div class="form-inner">--}}
{{--                            <h3 class="form-description">Написать комментарий</h3>--}}
{{--                            <textarea class="form-textarea" name="text" placeholder="Комментарий..." rows="5"></textarea>--}}

{{--                            @error('text')--}}
{{--                            <p style="color: red">{{$message}}</p>--}}
{{--                            @enderror--}}

{{--                            <input class="form-button" type="submit" value="Отправить">--}}
{{--                        </div>--}}
{{--                    </form>--}}


{{--                    <!-- COMMENT 1 - START -->--}}
{{--                    @foreach($post->comments as $comment)--}}
{{--                        <div class="media">--}}
{{--                            <div class="media-body">--}}
{{--                                <h4 class="media-heading">{{$comment->user->name}}</h4>--}}
{{--                                <i class="fa fa-calendar" style="color: white; padding: 10px 0"> {{$comment->created_at}}</i>--}}
{{--                                <p class="media-paragraph">{{$comment->text}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                @endforeach--}}
{{--                <!-- COMMENT 1 - END -->--}}
{{--    </section>--}}

    @include('partials.footer')
@endsection
