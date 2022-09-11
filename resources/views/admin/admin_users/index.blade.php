@extends('layout.admin')

@section('title', 'Администраторы')

@section('content')

    <div class="card">

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Имя
                    </th>
                    <th style="width: 20%">
                        Email
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($users) || is_object($users))
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route("admin.admin_users.edit", $user->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route("admin.admin_users.destroy", $user->id)}}" method="POST">
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
