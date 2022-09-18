@extends('layout.admin')

@section('title', 'Добавить альбом')

@section('content')

    <div class="container">
        <div class="row">


            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Добавить альбом</b> </h3>
                <div class="form-group">
                    <form action="{{route('admin.albums.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control m-2" placeholder="Название">
                        <input name="body" class="form-control m-2" placeholder="Дата">
                        <label class="m-2">Обложка</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="image">

                        <label class="m-2">Фотографии</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="photos[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
