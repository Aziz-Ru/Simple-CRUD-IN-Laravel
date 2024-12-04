<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->unique()->phoneNumber(),
            'address'=>fake()->address(),
            'age'=>fake()->numberBetween(10,25),
            'class_id'=>fake()->numberBetween(1,10)
        ];
    }
}
