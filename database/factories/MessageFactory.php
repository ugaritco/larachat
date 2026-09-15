<?php

namespace Database\Factories;

use App\Models\Chat;
use Heritage\Database\Eloquent\Factories\Factory;

/**
 * @extends \Heritage\Database\Eloquent\Factories\Factory<\App\Models\Message>
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
            'chat_id' => Chat::factory(),
            'type' => $this->faker->randomElement(['prompt', 'response']),
            'content' => $this->faker->paragraph(),
        ];
    }
}
