<?php

namespace Database\Factories;

use App\Models\Flight;
use App\Models\travel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evaluation'=>fake()->text(),
            'flight_id'=>Flight::all()->random()->id,
            'user_id'=>User::all()->random()->id, 
        ];
    }
}
