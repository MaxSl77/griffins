<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\Album;
use App\Models\Attribute;
use App\Models\Coach;
use App\Models\Photo;
use App\Models\Player;
use App\Models\Post;
use App\Models\Timetable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::all()->count();
        $coaches = Coach::all()->count();
        $adminuser = AdminUser::all()->count();
        $players = Player::all()->count();
        $attributes = Attribute::all()->count();
        $timetables = Timetable::all()->count();
        $albums = Album::all()->count();

        return view("admin.home", [
            "posts" => $posts,
            "coaches" => $coaches,
            "adminuser" => $adminuser,
            "players" => $players,
            "attributes" => $attributes,
            "timetables" => $timetables,
            "albums" => $albums,
        ]);
    }
}
