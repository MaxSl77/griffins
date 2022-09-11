@extends('layout.admin')

@section('title', 'Все игроки')

@section('content')

    <div class="card">

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 10%">
                        ID
                    </th>
                    <th>
                        ФИО
                    </th>
                    <th style="width: 25%;">
                        Амплуа
                    </th>
                    <th style="width: 15%">
                        Номер
                    </th>
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($players) || is_object($players))
                    @foreach($players as $player)
                        <tr>
                            <td>
                                {{$player->id}}
                            </td>
                            <td>
                                {{$player->title}}
                            </td>
                            <td>
                                {{$player->position}}
                            </td>
                            <td>
                                {{$player->number}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.players.edit', $player->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.players.destroy', $player->id)}}" method="POST">
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
@endsection
