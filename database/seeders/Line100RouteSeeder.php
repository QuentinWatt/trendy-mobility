<?php

namespace Database\Seeders;

use App\Models\Segment;
use App\Models\Station;
use App\Models\TransitRoute;
use Illuminate\Database\Seeder;

class Line100RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $line100EastBound = TransitRoute::factory()->create([
            'route_name' => '100 East',
            'short_name' => '100',
            'direction' => 'east',
        ]);
        $line100WestBound = TransitRoute::factory()->create([
            'route_name' => '100 West',
            'short_name' => '100',
            'direction' => 'west',
        ]);

        $eastBoundSegments = [
            [
                'depart_station_id' => Station::where('name', 'Cape Town CTICC')->first()->id,
                'arrive_station_id' => Station::where('name', 'Cape Town Airport')->first()->id,
                'distance' => '19600',
                'estimated_travel_time' => '21',
                'transit_route_id' => $line100EastBound->id,
            ],
            [
                'depart_station_id' => Station::where('name', 'Cape Town Airport')->first()->id,
                'arrive_station_id' => Station::where('name', 'Stellenbosch University')->first()->id,
                'distance' => '34000',
                'estimated_travel_time' => '40',
                'transit_route_id' => $line100EastBound->id,
            ],
            [
                'depart_station_id' => Station::where('name', 'Stellenbosch University')->first()->id,
                'arrive_station_id' => Station::where('name', 'Franchoek Huguenot Memorial')->first()->id,
                'distance' => '30100',
                'estimated_travel_time' => '28',
                'transit_route_id' => $line100EastBound->id,
            ],
        ];

        $westBoundSegments = [
            [
                'depart_station_id' => Station::where('name', 'Franchoek Huguenot Memorial')->first()->id,
                'arrive_station_id' => Station::where('name', 'Stellenbosch University')->first()->id,
                'distance' => '30100',
                'estimated_travel_time' => '28',
                'transit_route_id' => $line100WestBound->id,
            ],
            [
                'depart_station_id' => Station::where('name', 'Stellenbosch University')->first()->id,
                'arrive_station_id' => Station::where('name', 'Cape Town Airport')->first()->id,
                'distance' => '34000',
                'estimated_travel_time' => '40',
                'transit_route_id' => $line100WestBound->id,
            ],
            [
                'depart_station_id' => Station::where('name', 'Cape Town Airport')->first()->id,
                'arrive_station_id' => Station::where('name', 'Cape Town CTICC')->first()->id,
                'distance' => '19600',
                'estimated_travel_time' => '21',
                'transit_route_id' => $line100WestBound->id,
            ],
        ];

        collect($eastBoundSegments)->each(function($segment) {
            Segment::factory()->create($segment);
        });

        collect($westBoundSegments)->each(function($segment) {
            Segment::factory()->create($segment);
        });
    }
}
