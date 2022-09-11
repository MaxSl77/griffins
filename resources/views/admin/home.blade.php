@extends('layout.admin')

@section('title', 'Главная')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $posts }}</h3>
                            <p>Статьи</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-podcast"></i>
                        </div>
                        <a href="{{ route('admin.posts.index') }}" class="small-box-footer">Все статьи <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-blue">
                        <div class="inner">
                            <h3>{{ $coaches }}</h3>
                            <p>Тренеры</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="{{ route('admin.coaches.index') }}" class="small-box-footer">Все тренеры <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $adminuser }}</h3>
                            <p>Администраторы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{ route('admin.admin_users.index') }}" class="small-box-footer">Все администраторы <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-lightblue">
                        <div class="inner">
                            <h3>{{ $players }}</h3>
                            <p>Игроки</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('admin.players.index') }}" class="small-box-footer">Все игроки <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
{{--                <!-- ./col -->--}}
{{--                <div class="col-lg-3 col-6">--}}
{{--                    <!-- small box -->--}}
{{--                    <div class="small-box bg-lightblue">--}}
{{--                        <div class="inner">--}}
{{--                            <h3>{{ $photos }}</h3>--}}
{{--                            <p>Фотографии</p>--}}
{{--                        </div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="fas fa-photo-video"></i>--}}
{{--                        </div>--}}
{{--                        <a href="{{ route('admin.photos.index') }}" class="small-box-footer">Все фотографии <i--}}
{{--                                class="fas fa-arrow-circle-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $timetables }}</h3>
                            <p>Расписание</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calendar-times"></i>
                        </div>
                        <a href="{{ route('admin.timetables.index') }}" class="small-box-footer">Расписание <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
