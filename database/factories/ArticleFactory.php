<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all()->pluck('id');
        $categories = Category::all()->pluck('id');

        return [
            'user_id'  => User::all()->random()->id,
            'category_id'  => Category::all()->random()->id,
            'title'  => fake()->name(),
            'slug'  => fake()->slug(),
            'views' => 0
        ];
    }
}
