<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransitRoute>
 */
class TransitRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $directions = ['north', 'east', 'west', 'south'];
        $lineNumber = fake()->numberBetween(100, 999);
        $lineDirection = $directions[fake()->numberBetween(0, 3)];

        return [
            'route_name' => Str::of($lineNumber . ' ' . $lineDirection)->title(),
            'short_name' => $lineNumber,
            'line_shape' => 'linear',
            'vehicle_type' => 'bus',
            'direction' => $lineDirection,
        ];
    }
}
