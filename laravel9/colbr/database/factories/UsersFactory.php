<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    static $password;
        return [
            'email' => $this->faker->unique()->email(),
            'firstname' => $this->faker->firstName('male'),
            'lastname' => $this->faker->lastName(),
            'password' => $password = bcrypt('secret'),
            'created_at' => '',
            'updated_at' => '',
        ];
    }
}

