<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'frist_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'number' => $this->faker->text(8),
            'email' => $this->faker->email(),
            'user_id' => rand(1,2)
        ];
    }
}
