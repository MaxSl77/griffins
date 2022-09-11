<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view("admin.posts.index", [
            "posts" => $posts,
        ]);
    }


    public function create()
    {
        return view("admin.posts.create", []);
    }



    public function store(PostFormRequest $request)
    {
        Post::create($request->validated());

        return redirect(route("admin.posts.index"));
    }


    public function edit(Post $post)
    {
        return view("admin.posts.create", [
            "post" => $post,
        ]);
    }


    public function update(PostFormRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect(route("admin.posts.index"));
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route("admin.posts.index"));
    }
}
