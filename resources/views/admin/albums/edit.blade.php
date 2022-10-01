@extends('layout.admin')

@section('title', 'Изменить альбом')

@section('content')

    <div class="container">
        <div class="row">


            <div class="col-lg-3">
                <p>Обложка</p>
                <form action="{{route('admin.deletePhoto', $album->id)}}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                </form>
                <img src="{{asset("/storage/". $album->image)}}" class="img-responsive"
                     style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>


                @if (count($photos)>0)
                    <p>Фотографии</p>
                    @foreach ($photos as $photo)
                        <form action="{{route('admin.deletePhoto', $photo->id)}}" method="post">
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="{{asset("/storage/". $photo->photo)}}" class="img-responsive"
                             style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                @endif

            </div>

            @if(isset($album))
                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Исправить альбом</b></h3>
                    <div class="form-group">
                        <form action="{{route('admin.albums.update', $album->id)}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            <input type="text" name="title" class="form-control m-2" placeholder="title"
                                   value="{{$album->title}}">
                            @error('title')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                            <input type="text" name="body" class="form-control m-2" placeholder="body" value="{{$album->body}}">
                            @error('body')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                            <label class="m-2">Обложка</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="image">
                            @error('image')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror

                            <label class="m-2">Фотографии</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="photos[]"
                                   multiple>
                            @error('photos')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror

                            <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
