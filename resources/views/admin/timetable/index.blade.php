@extends('layout.admin')

@section('title', 'Расписание')

@section('content')
    <style>
        /*Timetable*/
        .calendar-table {
            width: 100%;
            text-align: center;
            background-color: #343a40;
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

        .weekend {
            background-color: red;
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

        .weekend-wrapper {
            border: 1px solid red;
        }
        /*End of timetable*/
    </style>

    @if(is_array($timetables) || is_object($timetables))
        @foreach($timetables as $timetable)
    <table class="calendar-table">
        <tbody>
            <tr>
                <th colspan="7" class="month-wrapper"><span class="month">{{$timetable->month}}</span></th>
            </tr>
            <tr class="day-line">
                <th class="day-wrapper"><span class="day">Понедельник</span></th>
                <th class="day-wrapper"><span class="day">Вторник</span></th>
                <th class="day-wrapper"><span class="day">Среда</span></th>
                <th class="day-wrapper"><span class="day">Четверг</span></th>
                <th class="day-wrapper"><span class="day">Пятница</span></th>
                <th class="day-wrapper weekand"><span class="day">Суббота</span></th>
                <th class="day-wrapper weekand"><span class="day">Воскресенье</span></th>
            </tr>
{{--        @if(is_array($timetables) || is_object($timetables))--}}
{{--            @foreach($timetables as $timetable)--}}
            <tr class="date-line">
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
            </tr>
            <tr>
{{--                @if(is_array($timetables) || is_object($timetables))--}}
{{--                    @foreach($timetables as $timetable)--}}
                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams_2}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room_2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr class="date-line">
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
            </tr>
            <tr>
                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr class="date-line">
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
            </tr>
            <tr>
                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr class="date-line">
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
            </tr>
            <tr>
                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr class="date-line">
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
                <th class="date-wrapper weekend"><span class="date">{{$timetable->date}}</span></th>
            </tr>
            <tr>
                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekday-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>

                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td class="weekend-wrapper">
                    <table>
                        <tbody>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        <tr class="data-wrapper">
{{--                            <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->place}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->championship}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->type}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->start_at}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->teams}}</td>
                        </tr>
                        <tr class="data-wrapper">
                            <td class="data">{{$timetable->locker_room}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
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
    @endforeach
    @endif
@endsection
