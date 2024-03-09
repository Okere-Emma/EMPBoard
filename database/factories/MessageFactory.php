<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::inRandomOrder()->first(),
            'title' => fake()->realText($maxNbChars = 50, $indexSize =2),
            'content' => fake()->realText($maxNbChars = 100, $indexSize =2),
            //'dept_focus' => fake()->jobTitle(),
        ];
    }
}
