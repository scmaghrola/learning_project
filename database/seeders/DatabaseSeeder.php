<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Flight;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Subhash Magharola',
        //     'email' => 'subhash123@example.com',
        // ]);

        Flight::factory()->count(100)->create(); // 50 random flights
    }
}
