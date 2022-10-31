<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
                'name' => 'Cape Town CTICC',
                'latitude' => '-33.916569',
                'longitude' => '18.427024',
            ],
            [
                'name' => 'Cape Town Airport',
                'latitude' => '-33.966169',
                'longitude' => '18.593808',
            ],
            [
                'name' => 'Stellenbosch University',
                'latitude' => '-33.931700',
                'longitude' => '18.863167',
            ],
            [
                'name' => 'Franchoek Huguenot Memorial',
                'latitude' => '-33.914259',
                'longitude' => '19.122633',
            ],
            [
                'name' => 'Yzerfontein Spar',
                'latitude' => '-33.345108',
                'longitude' => '18.162075',
            ],
            [
                'name' => 'Langebaan Mall',
                'latitude' => '-33.047241',
                'longitude' => '18.051615',
            ],
        ];

        collect($stations)->each(function($station){
            Station::factory()->create([
                'name' => $station['name'],
                'latitude' => $station['latitude'],
                'longitude' => $station['longitude'],
            ]);
        });
    }
}
