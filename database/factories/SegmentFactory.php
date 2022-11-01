<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Segment>
 */
class SegmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'depart_station_id' => 1,
            'arrive_station_id' => 2,
            'distance' => (string) fake()->numberBetween(500, 35000),
            'estimated_travel_time' => (string) fake()->numberBetween(5, 60),
            'transit_route_id' => 1,
        ];
    }
}
