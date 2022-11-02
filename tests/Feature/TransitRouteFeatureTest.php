<?php

namespace Tests\Feature;

use App\Models\Segment;
use App\Models\Station;
use Tests\TestCase;
use App\Models\TransitRoute;

class TransitRouteFeatureTest extends TestCase
{
    public function test_it_returns_a_200_status_when_transit_route_exists()
    {
        $transitRoute = TransitRoute::factory()->create();

        $response = $this->get('/api/transit-route/'.$transitRoute->id);

        $response->assertStatus(200);
    }

    public function test_it_returns_a_404_when_a_transitRoute_doesnt_exist()
    {
        $transitRoute = TransitRoute::factory()->create();
        $transitRoute->delete();

        $response = $this->get('/api/transit-route/'.$transitRoute->id);

        $response->assertStatus(404);
    }

    public function test_it_includes_segments_data()
    {
        $transitRoute = TransitRoute::factory()->create();

        $departureStation = Station::factory()->create([
            'name' => 'Test station A',
            'latitude' => '33',
            'longitude' => '18',
        ]);

        $arrivalStation = Station::factory()->create([
            'name' => 'Test station B',
            'latitude' => '33',
            'longitude' => '18.2',
        ]);

        $segment = Segment::factory()->create([
            'depart_station_id' => $departureStation->id,
            'arrive_station_id' => $arrivalStation->id,
            'transit_route_id' => $transitRoute->id,
            'distance' => '11000',
            'estimated_travel_time' => '24',
        ]);

        $response = $this->get('/api/transit-route/'.$transitRoute->id);

        $response->assertStatus(200)
            ->assertJsonFragment(
                [
                    'segments' => [
                        'id' => $segment->id,
                        'depart_station' => [
                            'id' => $departureStation->id,
                            'name' => 'Test station A',
                            'latitude' => '33',
                            'longitude' => '18',
                        ],
                        'arrive_station' => [
                            'id' => $arrivalStation->id,
                            'name' => 'Test station B',
                            'latitude' => '33',
                            'longitude' => '18.2',
                        ],
                        'estimated_travel_time' => '24',
                        'distance' => '11000',
                    ],
                ]
            );
    }
}
