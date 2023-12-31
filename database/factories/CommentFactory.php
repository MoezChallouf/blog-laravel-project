<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post-id' => Post::factory(),
            'user-id' => Post::factory(),
            'body' => $this->faker->paragraph()
        ];
    }
}
