@extends('layout.admin')

@section('title', 'Добавить альбом')

@section('content')
    <h1 class="mt-2 mb-3" style="margin-left: 20px">Добавить альбом</h1>

    <div class="container" style="margin-top: 50px;">
        <div class="row">


            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Add New Album</b> </h3>
                <div class="form-group">
                    <form action="{{route('admin.album.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control m-2" placeholder="title">
                        <input type="text" name="author" class="form-control m-2" placeholder="author">
                        <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea>
                        <label class="m-2">Thumbnail Image</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="thumbnail">

                        <label class="m-2">Images</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
