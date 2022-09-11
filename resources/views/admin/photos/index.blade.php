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
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($photos) || is_object($photos))
                    @foreach($photos as $photo)
                        <tr>
                            <td>
                                {{$photo->id}}
                            </td>
                            <td>
                                {{$photo->title}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.photos.edit', $photo->id)}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.photos.destroy', $photo->id)}}" method="post">
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
