@extends('layout.admin')

@section('title', 'Расписание')

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
                        Фото расписания
                    </th>
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($timetables) || is_object($timetables))
                    @foreach($timetables as $timetable)
                        <tr>
                            <td>
                                {{$timetable->start_at}}
                            </td>
                            <td>
                                <img src="{{asset('/storage/'.$timetable->thumbnail)}}" alt="griffins" style="max-height: 100px; max-width: 150px" />
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.timetables.edit', $timetable->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.timetables.destroy', $timetable->id)}}" method="POST">
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

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

{{--    <style>--}}

{{--        .table-container {--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            width: 100%;--}}
{{--            background-color: #fff;--}}
{{--            border-radius: 10px;--}}
{{--            padding: 5px;--}}
{{--        }--}}

{{--        table {--}}
{{--            width: 100%;--}}
{{--            box-shadow: 15px 15px #0000000d;--}}
{{--            border-collapse: collapse;--}}
{{--        }--}}

{{--        tr:nth-of-type(odd) {--}}
{{--            background-color: #181133;--}}
{{--            color: #fff;--}}
{{--        }--}}

{{--        tr:nth-of-type(even) {--}}
{{--            background-color: #fff;--}}
{{--            color: #333;--}}
{{--        }--}}

{{--        th {--}}
{{--            background-color: #Dc005A;--}}
{{--            color: #fff;--}}
{{--            font-weight: 800;--}}
{{--            font-size: 20px;--}}
{{--        }--}}

{{--        td, th {--}}
{{--            padding: 12px;--}}
{{--            border: 1px solid #ccc;--}}
{{--            text-align: center;--}}
{{--        }--}}


{{--        @media only screen and (max-width: 768px),--}}
{{--        (min-device-width: 768px) and (max-device-width: 992px) {--}}
{{--            .table-container {--}}
{{--                width: 95%;--}}
{{--                background: transparent;--}}
{{--            }--}}

{{--            table,--}}
{{--            thead,--}}
{{--            tbody,--}}
{{--            th,--}}
{{--            td,--}}
{{--            tr {--}}
{{--                display: block;--}}
{{--            }--}}

{{--            thead {--}}
{{--                display: none;--}}
{{--            }--}}

{{--            tr {--}}
{{--                border: 1px solid #ccc;--}}
{{--                margin-bottom: 10px;--}}
{{--            }--}}

{{--            td {--}}
{{--                border: none;--}}
{{--                border-bottom: 1px solid #eee;--}}
{{--                position: relative;--}}
{{--                padding-left: 50%;--}}
{{--                text-align: right;--}}
{{--            }--}}

{{--            td::before {--}}
{{--                position: absolute;--}}
{{--                top: 6px;--}}
{{--                left: 6px;--}}
{{--                width: 45%;--}}
{{--                padding-right: 10px;--}}
{{--                white-space: nowrap;--}}
{{--                font-size: 16px;--}}
{{--                font-weight: 600;--}}
{{--                text-align: left;--}}
{{--            }--}}

{{--            td:nth-of-type(1)::before {--}}
{{--                content: "Date";--}}
{{--            }--}}

{{--            td:nth-of-type(2)::before {--}}
{{--                content: "Time";--}}
{{--            }--}}

{{--            td:nth-of-type(3)::before {--}}
{{--                content: "Place";--}}
{{--            }--}}

{{--            td:nth-of-type(4)::before {--}}
{{--                content: "Champ/Train";--}}
{{--            }--}}

{{--            td:nth-of-type(5)::before {--}}
{{--                content: "Teams";--}}
{{--            }--}}

{{--            td:nth-of-type(6)::before {--}}
{{--                content: "Lock room";--}}
{{--            }--}}
{{--        }--}}

{{--    </style>--}}

{{--    <div class="table-wrapper">--}}
{{--        <div class="table-container">--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr class="table-columnName">--}}
{{--                    <th class="table-column">Date</th>--}}
{{--                    <th class="table-column">Day</th>--}}
{{--                    <th class="table-column">Time</th>--}}
{{--                    <th class="table-column">Place</th>--}}
{{--                    <th class="table-column">Champ/Train</th>--}}
{{--                    <th class="table-column">Teams</th>--}}
{{--                    <th class="table-column">Locker room</th>--}}
{{--                    <th class="table-column">Editing</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--            @foreach($timetables as $timetable)--}}
{{--                <tbody>--}}
{{--                    <tr class="table-stringName">--}}
{{--                        <td class="table-string">{{$timetable->start_at}}</td>--}}
{{--                        <td class="table-string">{{$timetable->day_of_the_week}}</td>--}}
{{--                        <td class="table-string">{{$timetable->time}}</td>--}}
{{--                        <td class="table-string">{{$timetable->place}}</td>--}}
{{--                        <td class="table-string">{{$timetable->type}}</td>--}}
{{--                        <td class="table-string">{{$timetable->teams}}</td>--}}
{{--                        <td class="table-string">{{$timetable->locker_room}}</td>--}}
{{--                        <td class="project-actions text-right">--}}
{{--                            <a class="btn btn-info btn-sm" href="{{route('admin.timetables.edit', $timetable->id)}}">--}}
{{--                                <i class="fas fa-pencil-alt">--}}
{{--                                </i>--}}
{{--                                Редактировать--}}
{{--                            </a>--}}

{{--                            <form action="{{route('admin.timetables.destroy', $timetable->id)}}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit" class="btn btn-danger btn-sm" href="#">--}}
{{--                                    <i class="fas fa-trash">--}}
{{--                                    </i>--}}
{{--                                    Удалить--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </tbody>--}}


{{--                @endforeach--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
