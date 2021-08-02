<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Pig;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PigFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pig::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'balance' => $balance = $this->faker->randomNumber(5),
            'goal' => $this->faker->boolean() ? $this->faker->randomNumber(6) : 0,
            'added_this_month' => $balance - $this->faker->randomNumber(3),
            'category_id' => Category::factory(),
        ];
    }
}
