<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */

    public function definition()
    {
        $img = ['3.jpg', '4.jpg'];

        return [
            'title' => fake()->sentence(3),
            'description' => fake()->text(),
            // Mettre des images random
            'cover' =>$img[array_rand($img)],
        ];
    }
}
