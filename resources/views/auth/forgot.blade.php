@extends('layout.app')

@section('title', 'Восстановление пароля')

@section('content')

    <div class="bform py-5">
        <!-- Row -->
        <div class="row">
            <div class="container">
                <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
                    <div class="">
                        <h2 class="mb-3 font-weight-light">Восстановление пароля</h2>
                        <form method="POST" action="{{route('forgot_process')}}" class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="email" class="form-control" type="email" placeholder="email address">
                                        @error('email')
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row col-lg-8">
                                    <div class="col-lg-12 text-center">
                                        <div class="row" style="margin-bottom: 15px">
                                            <div class="col-lg-12">
                                                <a href="{{route('login')}}" class="btn btn-block bg-facebook text-white mt-2">Вспомнил пароль</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0"><span>Восстановить</span></button>
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
