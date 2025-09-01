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
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(18, 30),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'course' => $this->faker->randomElement(['BCA', 'MCA', 'BBA', 'MBA', 'BSc', 'MSc']),
            'enrollment_date' => $this->faker->date(),
        ];
    }
}
