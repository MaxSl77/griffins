@extends('layout.app')

@section('title', 'Расписание')

@section('content')
    @include('partials.header')

    <style>
        .wrap {
            padding: 0 0;
        }
        .table-container {
            display: flex;
            justify-content: center;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tr:nth-of-type(odd) {
            background-color: #181133;
            color: #fff;
        }

        tr:nth-of-type(even) {
            background-color: #fff;
            color: #333;
        }

        th {
            background-color: #Dc005A;
            color: #fff;
            font-weight: 800;
            font-size: 20px;
        }

        td, th {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }


        @media only screen and (max-width: 768px),
        (min-device-width: 768px) and (max-device-width: 992px) {
            .table-container {
                width: 100%;
                background: transparent;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                border: 1px solid #ccc;
                margin-bottom: 10px;
            }

            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                /*padding-left: 50%;*/
                text-align: center;
            }

            td::before {
                /*position: absolute;*/
                /*top: 6px;*/
                /*left: 6px;*/
                /*width: 45%;*/
                padding-right: 10px;
                /*white-space: nowrap;*/
                font-size: 16px;
                font-weight: 600;
                /*text-align: left;*/
            }

            td:nth-of-type(1)::before {
                content: "Date :";
            }

            td:nth-of-type(2)::before {
                content: "Day :";
            }

            td:nth-of-type(3)::before {
                content: "Time :";
            }

            td:nth-of-type(4)::before {
                content: "Place :";
            }

            td:nth-of-type(5)::before {
                content: "Champ/Train :";
            }

            td:nth-of-type(6)::before {
                content: "Teams :";
            }

            td:nth-of-type(7)::before {
                content: "Lock room :";
            }
        }

    </style>

    <section class="main">
        <h2 class="main__title">расписание</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="wrap">
{{--                <div class="personal">--}}
                    <div class="table-container">
                        <table class="table">
                            <thead>
                            <tr class="table-columnName">
                                <th class="table-column">Date</th>
                                <th class="table-column">Day</th>
                                <th class="table-column">Time</th>
                                <th class="table-column">Place</th>
                                <th class="table-column">Champ/Train</th>
                                <th class="table-column">Teams</th>
                                <th class="table-column">Locker room</th>
                            </tr>
                            </thead>
                            @foreach($timetables as $timetable)
                                <tbody>
                                <tr class="table-stringName">
                                    <td class="table-string">{{$timetable->start_at}}</td>
                                    <td class="table-string">{{$timetable->day_of_the_week}}</td>
                                    <td class="table-string">{{$timetable->time}}</td>
                                    <td class="table-string">{{$timetable->place}}</td>
                                    <td class="table-string">{{$timetable->type}}</td>
                                    <td class="table-string">{{$timetable->teams}}</td>
                                    <td class="table-string">{{$timetable->locker_room}}</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
{{--                </div>--}}
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
