@extends('layout.admin')

@section('title', 'Все альбомы')

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
                        Название
                    </th>
                    <th>
                        Дата
                    </th>
                    <th>
                        Обложка
                    </th>
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($albums as $album)
                        <tr>
                            <td>
                                {{$album->id}}
                            </td>
                            <td>
                                {{$album->title}}
                            </td>
                            <td>
                                {{$album->body}}
                            </td>
                            <td>
                                <img src="{{asset('/storage/'.$album->image)}}" alt="" class="img-responsive" width="150">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.albums.edit', $album->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.albums.delete', $album->id)}}" method="POST">
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
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
