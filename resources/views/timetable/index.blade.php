@extends('layout.app')

@section('title', 'Расписание')

@section('content')
    @include('partials.header')
@foreach($timetables as $timetable)
    <section class="main">
        <h2 class="main__title">Расписание</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="wrap">
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
                    </tbody>
                </table>
                <p style="color: white; font-weight: bold; font-size: 20px; margin: 10px 0">В расписании возможны изменения. Расписание обновляется в пятницу и в понедельник. Время и место уточняйте у тренеров, Председателя Совета, или в группе в вайбере.</p>
                <p style="color:red; font-weight: bold; font-size: 20px;">* Если вместо времени стоят прочерки, значит время тренировки или игры еще уточняется!!!</p>
            </div>
        </div>
    </section>
    @endforeach

    @include('partials.footer')
@endsection
