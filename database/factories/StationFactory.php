<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $places = ['place', 'street', 'road', 'square'];
        $names = [fake()->lastName(), fake()->firstName()];

        return [
            'name' => Str::title($names[fake()->numberBetween(0, 1)] . ' ' . $places[fake()->numberBetween(0, 3)]),
            'latitude' => '-33.922214',
            'longitude' => '18.429004',
        ];
    }
}
