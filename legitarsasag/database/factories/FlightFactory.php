<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=>now(),
            'limit'=>fake()->numberBetween(1, 100),
            'airline_id'=>Airline::all()->random()->id,
        ];
    }
}
