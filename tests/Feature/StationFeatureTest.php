<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Station;

class StationFeatureTest extends TestCase
{
    public function test_returns_a_404_when_a_station_is_not_found()
    {
        $station = Station::factory()->create();
        $station->delete();

        $this->assertDatabaseMissing('stations', [
            'id' => $station->id
        ]);

        $this->get('/api/station/'.$station->id)
            ->assertStatus(404);
    }

    public function test_it_returns_station_json_data()
    {
        $station = Station::factory()->create();

        $this->get('/api/station/'.$station->id)
            ->assertOk()
            ->assertJson([
                'id' => $station->id,
                'name' => $station->name,
                'latitude' => $station->latitude,
                'longitude' => $station->longitude,
            ]);
    }
}
