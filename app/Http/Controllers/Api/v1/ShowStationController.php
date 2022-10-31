<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Station;
use App\Http\Controllers\Controller;

class ShowStationController extends Controller
{
    public function __invoke(Station $station)
    {
        return response()->json(
            [
                'id' => $station->id,
                'name' => $station->name,
                'latitude' => $station->latitude,
                'longitude' => $station->longitude,
            ],
            200
        );
    }
}
