@extends('layout.admin')

@section('title', 'Расписание')

@section('content')
    <style>
        /*Timetable*/
        .calendar-table {
            display: flex;
            flex-wrap: wrap;
            /*position: relative;*/
            text-align: center;
            width: 100%;
            background-color: #1a252f;
        }

        .tbody {
            height: 455px;
            margin-bottom: 40px;

        }

        .month-wrapper {
            padding: 10px;
        }

        .month {
            color: white;
            font-size: 32px;
        }

        .day-wrapper {
            border: 1px solid white;
            padding: 10px;
        }

        .day {
            color: white;
        }

        .date-wrapper {
            padding: 10px 0;
            border: 1px solid white;
        }

        .date {
            color: white;
        }

        .data-wrapper {
            text-align: center;
        }

        .data {
            color: white;
            padding: 3px 0;
        }

        .weekday-wrapper {
            border: 1px solid white;
        }
        /*End of timetable*/
    </style>
    <table class="calendar-table">
        <thead>
        @foreach($timetables as $month => $events)
            <tr>
                <th class="month-wrapper"><span class="month">{{$month}}</span></th>
            </tr>
        </thead>
        @foreach($events as $event)
        <tbody class="tbody">
                <tr class="day-line">
                    <th class="day-wrapper"><span class="day">{{$event['day_of_week']}}</span></th>
                </tr>
                <tr class="date-line">
                    <th class="date-wrapper"><span class="date">{{$event['date']}}</span></th>
                </tr>
                <tr>
                    <td class="weekday-wrapper">
                        <table>
                            <tbody>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['place']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['championship']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['type']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['start_at']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['teams']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['locker_room']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                {{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['place_2']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['championship_2']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['type_2']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['start_at_2']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['teams_2']}}</td>
                            </tr>
                            <tr class="data-wrapper">
                                <td class="data">{{$event['locker_room_2']}}</td>
                            </tr>
                            </tbody>
                            <a class="btn btn-info btn-sm" href="{{route('admin.timetables.edit',$event['id'])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>
                            <form action="{{route('admin.timetables.destroy', $event['id'])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Удалить
                                </button>
                            </form>
                        </table>
                    </td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
@endsection
