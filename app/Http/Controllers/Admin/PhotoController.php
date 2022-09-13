<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photos.index', [
            'photos' => $photos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.photos.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('cover')){
            $file = $request->file('cover');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('cover/'),$imageName);

            $request->validate([
                'title' => 'required',
                'body' => 'required',
                'cover' => 'required',
            ]);

            $photo = new Photo([
               'title' => $request->title,
               'body' => $request->body,
               'cover' => $request->$imageName,
            ]);
            $photo->save();
        }

        if ($request->hasFile('images')) {
            $files=$request->file('images');
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['photo_id']=$photo->id;
                $request['image']=$imageName;
                $file->move(\public_path('/images'),$imageName);
                Image::create($request->all());
            }
        }
        return redirect(route("admin.photos.index"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photos=Photo::findOrFail($id);
        return view("admin.photos.create", [
            "photos" => $photos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);
        if($request->hasFile('cover')) {
            if(File::exists('cover/'.$photo->cover)) {
                File::delete('cover/'.$photo->cover);
            }
            $file = $request->file('cover');
            $photo->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path('/cover'), $photo->cover);
            $request['cover']=$photo->cover;
        }
        $photo->update([
           'title' => $request->title,
           'body' => $request->body,
           'cover' => $photo->cover,
        ]);

        if ($request->hasFile('images')) {
            $files=$request->file('images');
            foreach ($files as $file) {
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['photo_id']=$id;
                $request['image']=$imageName;
                $file->move(\public_path('images'),$imageName);
                Image::create($request->all());
            }
        }

        return redirect(route("admin.photos.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photos = Photo::findOrFail($id);

        if(File::exists('cover/'.$photos->cover)) {
            File::delete('cover/'.$photos->cover);
        }
        $images = Image::where('photo_id',$photos->id)->get();
        foreach ($images as $image) {
            if (File::exists('images/'.$image->image)) {
                File::delete('images/'.$image->image);
            }
        }
        $photos->delete();
        return back();
    }

    public function deleteimage($id) {
        $images = Image::findOrFail($id);
        if (File::exists('images/'.$images->image)) {
            File::delete('images/'.$images->image);
        }
        Image::find($id)->delete();
        return back();
    }

    public function deletecover($id) {
        $cover = Photo::findOrFail($id)->cover;
        if (File::exists('cover/'.$cover)) {
            File::delete('cover/'.$cover);
        }
        return back();
    }
}
