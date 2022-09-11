@extends('layout.admin')

@section('title', 'Все тренеры')

@section('content')

    <div class="card">

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 5%">
                        ID
                    </th>
                    <th>
                        ФИО
                    </th>
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($coaches) || is_object($coaches))
                    @foreach($coaches as $coach)
                        <tr>
                            <td>
                                {{$coach->id}}
                            </td>
                            <td>
                                {{$coach->title}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.coaches.edit', $coach->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.coaches.destroy', $coach->id)}}" method="POST">
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
