<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'    => strtoupper(fake()->bothify('FL###')), // e.g., FL123
            'airline' => fake()->randomElement([
                'Air India', 'IndiGo', 'SpiceJet', 'Vistara', 'GoAir', 'Lufta Hansa', 'King Fisher'
            ]),
            'departure'   => fake()->city(),
            'destination' => fake()->city(),
        ];
    }
}
