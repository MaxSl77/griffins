@extends('layout.admin')

@section('title', 'Все альбомы')

@section('content')

    <div class="card">

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th>
                        Дата
                    </th>
                    <th>
                    <th>
                        Время
                    </th>
                    <th>
                        Место
                    </th>
                    <th>
                        Тип события
                    </th>
                    <th>
                        Описание чемпионата
                    </th>
                    <th>
                        Раздевалки
                    </th>
{{--                    <th style="width: 20%">--}}
                    </th>
                </tr>
                </thead>
                <tbody>


                    @foreach($events as $event)
                        <tr>
                            <td>{{$event->datetime->isoFormat('dddd')}}</td>
                            <td>{{$event->datetime->isoFormat('D.M.Y')}}</td>
                            <td>{{$event->place}}</td>
                            <td>{{$event->type}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{ $event->teams->implode('name', '-')}}</td>
                            <td>{{$event->locker_room}}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{route('admin.events.edit', $event->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <form action="{{route('admin.events.destroy', $event->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection


