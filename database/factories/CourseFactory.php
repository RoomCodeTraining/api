<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->word();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => 'Description du ocursus',
            'price' => rand(1000, 10000),
            'image' => "courses/zGhxN8QT1cSvUtYRyhfd8nbvDEbdqjP61YcTcUwn.jpg",
            'category_id' => Category::all()->random()->id,
            'user_id' => User::factory(),
            'likes' => rand(0, 500),
            'views' => rand(0, 500)
        ];
    }
}
