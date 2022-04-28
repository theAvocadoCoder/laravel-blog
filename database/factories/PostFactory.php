<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Number;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'user_id' => $this->randomUnique('user_id'),
            'category_id' => $this->randomUnique('category_id'),
            'slug' => Str::random(7),
            'content' => $this->faker->sentence(300),
            'is_published' => true
        ];
    }

    public function randomUnique($column)
    {
        do {
            $num = random_int(10000, 99999);
        } while (Post::where($column, $num)->first());
        return $num;
    }
}
