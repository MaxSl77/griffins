@extends('layout.app')

@section('title', 'Контакты')

@section('content')
    @include('partials.header')
    <section class="main">
        <h2 class="main__title">контакты</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="contact-formWrapper">
                <div class="contact-form">
                    <h3 class="erip-heading">Предстедатель СК "Грифоны"</h3>
                    <h4 class="erip-heading">Ярошинский Евгений Анатольевич</h4>
                    <a href="mailto:yaroshinskii_evg@mail.ru">yaroshinskii_evg@mail.ru </a>
                    <p class="erip-paragraph">+375 44 738-03-65</p>
                </div>
                <div class="contact-form">
                    <h3 class="erip-heading">Менеджер СК "Грифоны"</h3>
                    <h4 class="erip-heading">Ярошинский Никита Евгеньевич</h4>
                    <a href="mailto:yaroshinskii_evg@mail.ru">yaroshinskii_nik@mail.ru </a>
                    <p class="erip-paragraph">+375 29 367-91-31</p>
                </div>
        </div>
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
        </div>
    </section>



    @include('partials.footer')
@endsection
