@extends('layout.app')

@section('title', 'Авторизация')

@section('content')

    <div class="bform py-5">
        <!-- Row -->
        <div class="row">
            <div class="container">
                <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
                    <div class="">
                        <h2 class="mb-3 font-weight-light">Вход</h2>
                        <h6 class="subtitle font-weight-normal">Lorem ipsum dolor sit amet, adipiscing.</h6>
                        <form method="POST" action="{{route('login_process')}}" class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="name" class="form-control" type="text" placeholder="name">
                                        @error('name')
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="email" class="form-control" type="email" placeholder="email address">
                                        @error('email')
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="password" class="form-control" type="password" placeholder="password">
                                        @error('password')
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                                <div class="row col-lg-8">
                                    <div class="col-lg-12 text-center">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="{{route('forgot')}}" class="btn btn-block bg-facebook text-white mt-2">Забыли пароль</a>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="{{route('register')}}" class="btn btn-block bg-twitter text-white mt-2">Регистрация</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center mt-4">
                                    Если все данные введены, нажимай кнопку ВОЙТИ
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0"><span>Войти</span></button>
                                    <!-- -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
