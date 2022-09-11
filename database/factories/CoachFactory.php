<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coach;
use Illuminate\Support\Facades\Storage;

class CoachFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coach::class;

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
            "preview" => $this->faker->text(50),
            "thumbnail" => $this->faker->image(storage_path('app/public/uploads'), 230, 350, null, false)
        ];
    }
}
