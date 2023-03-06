@extends('layout.app')

@section('title', 'Расписание')

@section('content')
    @include('partials.header')
    <section class="main">
        <h2 class="main__title">Расписание</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="wrap">
                <table class="calendar-table">
                    <thead class="calendar-tbody">
                    <?php $i = 0 ?>
                    @foreach($events as $event)
                        @if($i++ == 1)
                            @break;
                        @endif
                        <tr>
                            <th colspan="7" class="month-wrapper"><span
                                    class="month">{{$event->datetime->isoFormat('MMMM')}}</span></th>
                        </tr>
                    @endforeach

                    </thead>
                    <tbody class="timetable">
                    @foreach($events as $event)
                        <tr class="timetable-wrapper">
                            @if ($event->datetime->isoFormat('dddd') === "суббота")
                                <td class="weekday-weekend">{{$event->datetime->isoFormat('dddd')}}</td>
                            @elseif( $event->datetime->isoFormat('dddd') === "воскресенье")
                                <td class="weekday-weekend">{{$event->datetime->isoFormat('dddd')}}</td>
                            @elseif($event->datetime->isoFormat('dddd'))
                                <td class="weekday">{{$event->datetime->isoFormat('dddd')}}</td>
                            @endif
                            <td class="monthdate">{{$event->datetime->isoFormat('D')}}</td>
                            <td class="day-data">{{$event->place}}</td>
                            <td class="day-data">{{$event->type}}</td>
                            <td class="day-data">{{$event->description}}</td>
                            @if ($event->datetime->isoFormat('H:mm') == "0:00")
                                <td class="day-data">Выходной</td>
                            @elseif($event->datetime->isoFormat('H:mm'))
                                <td class="day-data">{{$event->datetime->isoFormat('H:mm')}}</td>
                            @endif
                            <td class="day-data">{{$event->teams->implode('name', '-')}}</td>
                            <td class="day-data">{{$event->locker_room}}</td>
                            <td>
                                @if ($event->underline == 1)
                                    <hr class="events-separator">
                                @endif
                            </td>
                            <td class="day-data">{{$event->second_place}}</td>
                            <td class="day-data">{{$event->second_type}}</td>
                            <td class="day-data">{{$event->second_description}}</td>
                            @if ($event->second_datetime)
                                <td class="day-data">{{$event->second_datetime->isoFormat('H:mm')}}</td>
                            @endif
                            <td class="day-data">{{$event->second_teams->implode('second_name', '-')}}</td>
                            <td class="day-data">{{$event->second_locker_room}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p class="timetable-warning">В расписании возможны изменения. Расписание обновляется в пятницу и в
                    понедельник. Время и место
                    уточняйте у тренеров, Председателя Совета, или в группе в вайбере.</p>

                <p class="timetable-secondWarning">* Если вместо времени стоят прочерки, значит время тренировки или
                    игры еще уточняется!!!</p>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
