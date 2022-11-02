<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class SegmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'depart_station' => new StationResource($this->departureStation),
            'arrive_station'=> new StationResource($this->arrivalStation),
            'distance' => $this->distance,
            'estimated_travel_time' => $this->estimated_travel_time,
        ];
    }
}
