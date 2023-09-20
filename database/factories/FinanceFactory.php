<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;


class FinanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'category' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'value' => $this->faker->randomNumber(),
            'user_id' => function () {
                $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                $random = Arr::random($array);
                return $random;
            },
        ];
    }
}
