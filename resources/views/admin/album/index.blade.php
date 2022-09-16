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
{{--                <tbody>--}}
{{--                @if(is_array($posts) || is_object($posts))--}}
{{--                    @foreach($posts as $post)--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                {{$post->id}}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{$post->title}}--}}
{{--                            </td>--}}
{{--                            <td class="project-actions text-right">--}}
{{--                                <a class="btn btn-info btn-sm" href="#">--}}
{{--                                    <i class="fas fa-pencil-alt">--}}
{{--                                    </i>--}}
{{--                                    Редактировать--}}
{{--                                </a>--}}

{{--                                <form action="#" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" class="btn btn-danger btn-sm" href="#">--}}
{{--                                        <i class="fas fa-trash">--}}
{{--                                        </i>--}}
{{--                                        Удалить--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--                </tbody>--}}
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
