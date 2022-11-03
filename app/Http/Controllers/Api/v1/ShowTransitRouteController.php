<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\TransitRoute;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\TransitRouteResource;

class ShowTransitRouteController extends Controller
{
    public function __invoke(TransitRoute $transitRoute)
    {
        return response()->json(
            new TransitRouteResource($transitRoute),
            200
        );
    }
}
