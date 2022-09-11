@extends('layout.admin')

@section('title',  isset($user) ? "Редактировать пользователя ID {$user->id}" : 'Добавить пользователя')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($user) ? "Редактировать пользователя ID {$user->id}" : 'Добавить пользователя'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($user) ? route("admin.admin_users.update", $user->id) : route("admin.admin_users.store")}}">
        @csrf

        @if(isset($user))
            <input type="hidden" name="id" value="{{ $user->id }}"/>
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="email" class="form-control" name="email"
                   placeholder="email" value="{{ $user->email ?? '' }}">

            @error('email')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="name" class="form-control" name="name"
                   placeholder="Имя" value="{{ $user->name ?? '' }}">
            @error('name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password"
                   placeholder="Пароль" value="">
            @error('password')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation"
                   placeholder="Подтверждение пароля" value="">
            @error('password_confirmation')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection

