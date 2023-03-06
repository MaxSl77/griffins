<?php

namespace Database\Factories;

use App\Models\AdminUser;
use App\Models\SecondTeam;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SecondTeamFactory extends Factory
{
    protected $model = SecondTeam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'second_name' => $this->faker->name(),
        ];
    }
}
