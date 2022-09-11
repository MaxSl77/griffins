<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Attribute;
use App\Models\Calendar;
use App\Models\Coach;
use App\Models\Player;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "laravel@laravel.com",
            "password" => "12345",
        ]);

        User::factory(10)->create();

        Post::factory(10)->create();

        Coach::factory(5)->create();

        Player::factory(10)->create();

        Attribute::factory(1)->create([
            "title" => 'Раздел находится в разработке'
        ]);
    }
}
