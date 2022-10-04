@extends('layout.app')

@section('title', 'Расписание')

@section('content')
    @include('partials.header')

    <section class="main">
        <h2 class="main__title">Команда</h2>
        <hr class="main__line">
        <div class="main__wrapper">
            <div class="wrap">
                <table class="calendar-table">
                    <tbody>
                    <tr>
                        <th colspan="7" class="month-wrapper"><span class="month">Сентябрь</span></th>
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
                        <th class="date-wrapper"><span class="date">1</span></th>
                        <th class="date-wrapper"><span class="date">2</span></th>
                        <th class="date-wrapper"><span class="date">3</span></th>
                        <th class="date-wrapper"><span class="date">4</span></th>
                        <th class="date-wrapper"><span class="date">5</span></th>
                        <th class="date-wrapper weekend"><span class="date">6</span></th>
                        <th class="date-wrapper weekend"><span class="date">7</span></th>
                    </tr>
                    <tr>
                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr class="date-line">
                        <th class="date-wrapper"><span class="date">8</span></th>
                        <th class="date-wrapper"><span class="date">9</span></th>
                        <th class="date-wrapper"><span class="date">10</span></th>
                        <th class="date-wrapper"><span class="date">11</span></th>
                        <th class="date-wrapper"><span class="date">12</span></th>
                        <th class="date-wrapper weekend"><span class="date">13</span></th>
                        <th class="date-wrapper weekend"><span class="date">14</span></th>
                    </tr>
                    <tr>
                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr class="date-line">
                        <th class="date-wrapper"><span class="date">15</span></th>
                        <th class="date-wrapper"><span class="date">16</span></th>
                        <th class="date-wrapper"><span class="date">17</span></th>
                        <th class="date-wrapper"><span class="date">18</span></th>
                        <th class="date-wrapper"><span class="date">19</span></th>
                        <th class="date-wrapper weekend"><span class="date">20</span></th>
                        <th class="date-wrapper weekend"><span class="date">21</span></th>
                    </tr>
                    <tr>
                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr class="date-line">
                        <th class="date-wrapper"><span class="date">22</span></th>
                        <th class="date-wrapper"><span class="date">23</span></th>
                        <th class="date-wrapper"><span class="date">24</span></th>
                        <th class="date-wrapper"><span class="date">25</span></th>
                        <th class="date-wrapper"><span class="date">26</span></th>
                        <th class="date-wrapper weekend"><span class="date">27</span></th>
                        <th class="date-wrapper weekend"><span class="date">28</span></th>
                    </tr>
                    <tr>
                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr class="date-line">
                        <th class="date-wrapper"><span class="date">29</span></th>
                        <th class="date-wrapper"><span class="date">30</span></th>
                        <th class="date-wrapper"><span class="date">31</span></th>
                        <th class="date-wrapper"><span class="date">1</span></th>
                        <th class="date-wrapper"><span class="date">2</span></th>
                        <th class="date-wrapper weekend"><span class="date">3</span></th>
                        <th class="date-wrapper weekend"><span class="date">4</span></th>
                    </tr>
                    <tr>
                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekday-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>

                        <td class="weekend-wrapper">
                            <table>
                                <tbody>
                                <tr class="data-wrapper">
                                    <td class="data">Дворец спорта</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ПСК</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Высшая лига</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">13:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Газпромбанк - Грифоны</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data" style="background-color: red; border: 1px solid red;"></td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Каролинский переулок 2а</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">ОХЛ</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">-</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">17:00</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Лесорубы - Викинги</td>
                                </tr>
                                <tr class="data-wrapper">
                                    <td class="data">Разд. 119, 120</td>
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

    @include('partials.footer')
@endsection
