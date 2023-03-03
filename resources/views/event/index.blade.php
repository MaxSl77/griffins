@extends('layout.app')

@section('title', 'Расписание')

@section('content')
    @include('partials.header')
    <section class="main">
        <h2 class="main__title">Расписание</h2>
        <hr class="main__line">
        <div class="main__wrapper">
                <table class="calendar-table">
                    <thead class="calendar-tbody">
                    <?php $i = 0 ?>
                    @foreach($events as $event)
                        @if($i++ == 1)
                            @break;
                            @endif
                    <tr>
                        <th colspan="7" class="month-wrapper"><span class="month">{{$event->datetime->isoFormat('MMMM')}}</span></th>
                    </tr>
                    @endforeach

                    </thead>
                    <tbody  class="timetable">
                    @foreach($events as $event)
                            <tr class="timetable-wrapper">
                                <td class="weekday">{{$event->datetime->isoFormat('dddd')}}</td>
                                <td class="monthdate">{{$event->datetime->isoFormat('D')}}</td>
                                <td class="day-data">{{$event->place}}</td>
                                <td class="day-data">{{$event->type}}</td>
                                <td class="day-data">{{$event->description}}</td>
                                <td class="day-data">{{$event->datetime->isoFormat('H:mm')}}</td>
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
                                <td class="day-data">{{$event->second_locker_room}}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </section>
    @include('partials.footer')
@endsection
