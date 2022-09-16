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
                        Title
                    </th>
                    <th>
                        Author
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Thumbnail
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($albums) || is_object($albums))
                    @foreach($albums as $album)
                        <tr>
                            <td>
                                {{$album->id}}
                            </td>
                            <td>
                                {{$album->title}}
                            </td>
                            <td>
                                {{$album->author}}
                            </td>
                            <td>
                                {{$album->body}}
                            </td>
                            <td>
                                <img src="{{asset('storage/'.$album->thumbnail)}}" class="img-responsive" style="max-height: 100px; max-width: 100px" alt="">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.album.edit', $album->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.album.destroy', $album->id)}}" method="POST">
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
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
