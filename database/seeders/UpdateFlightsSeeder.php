<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;

class UpdateFlightsSeeder extends Seeder
{
    public function run(): void
    {
        $cities = ['Delhi', 'Mumbai', 'Chennai', 'Bangalore', 'Hyderabad', 'Kolkata', 'Ahmedabad'];

        // update each flight with random departure & destination
        Flight::all()->each(function ($flight) use ($cities) {
            $departure = fake()->randomElement($cities);
            $destination = fake()->randomElement(array_diff($cities, [$departure])); // ensure different

            $flight->update([
                'departure' => $departure,
                'destination' => $destination,
            ]);
        });
    }
}
