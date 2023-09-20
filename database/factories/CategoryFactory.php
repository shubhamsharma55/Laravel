<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_title' => $this->faker->word,
        ];
    }

    /**
     * Define a custom state to set the category title based on the provided value.
     *
     * @param  string  $title
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withTitle($title)
    {
        return $this->state([
            'category_title' => $title,
        ]);
    }
}
