<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "description" => $this->faker->text(),
            "number" => rand(1, 99),
            "preview" => $this->faker->text(50),
            "thumbnail" => $this->faker->image(storage_path('app/public/uploads'), 230, 350, null, false),
            "position" => $this->faker->text(),
        ];
    }
}
