@extends('layout.admin')

@section('date', isset($timetable) ? "Редактировать расписание" : 'Добавить расписание')

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

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($timetable) ? "Редактировать расписание" : 'Добавить расписание'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($timetable) ? route('admin.timetables.update', $timetable->id) : route('admin.timetables.store')}}">
        @csrf

        @if(isset($timetable))
            @method('PUT')
        @endif

                    <table class="calendar-table">
                        <tbody>
                        <tr>
                            <th colspan="7" class="month-wrapper"><span class="month"><input type="text" class="form-control" name="month"
                                                                                             placeholder="Месяц" value="{{ $timetable->month ?? '' }}"></span></th>
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
                         <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                            placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                        </tr>
                        <tr>
                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="date-line">
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                        </tr>
                        <tr>
                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr class="date-line">
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                        </tr>
                        <tr>
                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr class="date-line">
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                        </tr>
                        <tr>
                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr class="date-line">
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper"><span class="date"><input type="text" class="form-control" name="date"
                                                                               placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                            <th class="date-wrapper weekend"><span class="date"><input type="text" class="form-control" name="date"
                                                                                       placeholder="Дата" value="{{ $timetable->date ?? '' }}"></span></th>
                        </tr>
                        <tr>
                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekday-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>

                            <td class="weekend-wrapper">
                                <table>
                                    <tbody>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        {{--                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>--}}
                                    </tr>
                                     <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="place"
                                                                placeholder="Место" value="{{ $timetable->place_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="championship"
                                                                placeholder="Чемпионат/Тренировка" value="{{ $timetable->championship_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="type"
                                                                placeholder="Тип чемпионата" value="{{ $timetable->type_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="start_at"
                                                                placeholder="Начало" value="{{ $timetable->start_at_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="teams"
                                                                placeholder="Команды" value="{{ $timetable->teams_2 ?? '' }}"></td>
                                    </tr>
                                    <tr class="data-wrapper">
                                        <td class="data"><input type="text" class="form-control" name="locker_room"
                                                                placeholder="Раздевалки" value="{{ $timetable->locker_room_2 ?? '' }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
