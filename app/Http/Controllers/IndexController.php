<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Attribute;
use App\Models\Coach;
use App\Models\Photo;
use App\Models\Player;
use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $posts = Post::query()
            ->orderBy("created_at", "DESC")->limit(5)->get();

        return view('welcome', [
            "posts" => $posts,
        ]);
    }

    public function erip()
    {
        return view('erip');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $posts = Post::query()
            ->orderBy("created_at", "DESC")->limit(5)->get();

        if (!$search) {
            return view('welcome', [
                "posts" => $posts,
            ]);
        }

        $posts = Post::where(DB::raw('title'), 'LIKE', "%{$search}%")->orWhere('preview', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")->get();
        $attributes = Attribute::where(DB::raw('title'), 'LIKE', "%{$search}%")->get();
        $coaches = Coach::where(DB::raw('title'), 'LIKE', "%{$search}%")->orWhere('preview', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")->get();
        $players = Player::where(DB::raw('title'), 'LIKE', "%{$search}%")->orWhere('preview', 'LIKE', "%{$search}%")->orWhere('number', 'LIKE', "%{$search}%")->orWhere('position', 'LIKE', "%{$search}%")->get();
        $photos = Photo::where(DB::raw('title'), 'LIKE', "%{$search}%")->orWhere('preview', 'LIKE', "%{$search}%")->get();
        return view('search', ['search' => $search])->with('posts', $posts)->with('coaches', $coaches)->with('players', $players)->with('attributes', $attributes)->with('photos', $photos);
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("mslabko77@gmail.com")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}
