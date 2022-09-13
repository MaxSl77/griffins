@extends('layout.admin')

@section('title', isset($photo) ? "Редактировать альбом ID {$photo->id}" : 'Добавить альбом')

@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row">


            <div class="col-lg-3">
                <p>Cover:</p>
                <form action="/deletecover/{{ $photos->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                </form>
                <img src="/cover/{{ $photos->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>



                @if (count($photos->images)>0)
                    <p>Images:</p>
                    @foreach ($photos->images as $img)
                        <form action="/deleteimage/{{ $img->id }}" method="post">
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                @endif
            </div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Add New Photo</b> </h3>
                <div class="form-group">
                    <form action="{{ isset($photo) ? route('admin.photos.update', $photo->id) : route('admin.photos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control m-2" placeholder="title">
                        <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea>
                        <label class="m-2">Cover Image</label>
                        <input type="file" name="cover" id="input-file-now-custom-3" class="form-control m-2">

                        <label class="m-2">Images</label>
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
