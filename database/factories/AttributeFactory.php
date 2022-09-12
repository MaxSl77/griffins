<?php

namespace Database\Factories;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attribute::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "price" => rand(1, 100),
//            "preview" => $this->faker->text(50),
            "thumbnail" => $this->faker->image(storage_path('app/public/uploads'), 230, 350, null, false),
            "category" => $this->faker->text(),
            ];
    }
}
