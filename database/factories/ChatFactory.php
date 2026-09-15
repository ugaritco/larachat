<?php

namespace Database\Factories;

use App\Models\User;
use Heritage\Database\Eloquent\Factories\Factory;

/**
 * @extends \Heritage\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(4),
        ];
    }
}
