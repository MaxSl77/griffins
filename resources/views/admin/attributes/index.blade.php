@extends('layout.admin')

@section('title', 'Вся атрибутика')

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
                        Наименование
                    </th>
                    <th style="width: 25%;">
                        Категория
                    </th>
                    <th style="width: 15%">
                        Цена
                    </th>
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($attributes) || is_object($attributes))
                    @foreach($attributes as $attribute)
                        <tr>
                            <td>
                                {{$attribute->id}}
                            </td>
                            <td>
                                {{$attribute->title}}
                            </td>
                            <td>
                                {{$attribute->category}}
                            </td>
                            <td>
                                {{$attribute->price}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.attributes.edit', $attribute->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>

                                <form action="{{route('admin.attributes.destroy', $attribute->id)}}" method="POST">
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
