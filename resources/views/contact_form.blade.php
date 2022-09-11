@extends('layout.app')

@section('title', 'Контакты')

@section('content')
    @include('partials.header')

    <section class="content-item" id="comments">
        <form method="POST" action='{{route('contact_form_process')}}' class="decor">
            @csrf

            <div class="form-inner">
                <h3 class="form-description">Свяжитесь с нами</h3>
                <input class="form-input" name="email" type="email" placeholder="Email">
                @error('email')
                <p style="color: red">{{$message}}</p>
                @enderror
                <textarea class="form-textarea" name="text" placeholder="Сообщение..." rows="5"></textarea>
                @error('text')
                <p style="color: red">{{$message}}</p>
                @enderror

                <input class="form-button" type="submit" value="Написать">
            </div>
        </form>
    </section>

    @include('partials.footer')
@endsection
