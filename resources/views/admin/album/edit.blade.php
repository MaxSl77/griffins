@extends('layout.admin')

@section('title', 'Редактировать альбом')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row">


            <div class="col-lg-3">
                <p>Thumbnail:</p>
                <form action="{{route('admin.deleteThumbnail', $album->id)}}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                </form>
                <img src="{{asset('storage/'.$album->thumbnail)}}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>



                @if (count($albums->images)>0)
                    <p>Images:</p>
                    @foreach ($albums->images as $image)
                        <form action="{{route('admin.deletePhoto', $image->id)}}" method="post">
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="{{asset("storage/". $image->image)}}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                @endif

            </div>


            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Update album</b> </h3>
                <div class="form-group">
                    <form action="{{route('admin.album.update', $album->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $album->title }}">
                        <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $album->author }}">
                        <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $album->body }}</Textarea>
                        <label class="m-2">Cover Image</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                        <label class="m-2">Images</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
