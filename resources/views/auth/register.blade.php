@extends('layout.app')

@section('title', 'Регистрация')

@section('content')

    <div class="bform py-5">
        <!-- Row -->
        <div class="row">
            <div class="container">
                <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
                    <div class="">
                        <h2 class="mb-3 font-weight-light">Регистрация</h2>
                        <h6 class="subtitle font-weight-normal">Lorem ipsum dolor sit amet, adipiscing.</h6>
                        <form action="{{route('register_process')}}" class="mt-3" method="POST">
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="password_confirmation" class="form-control" type="password" placeholder="confirm password">
                                        @error('password_confirmation')
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0"><span>Зарегистрироваться</span></button>
                                    <!-- -->
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12 text-center mt-4">
                            Есть аккаунт? <a href="{{route('login')}}" class="text-danger">Вход</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
