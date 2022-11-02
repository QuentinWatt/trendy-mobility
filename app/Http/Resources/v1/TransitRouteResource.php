<?php

namespace App\Http\Resources\v1;

use App\Http\Resources\v1\SegmentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TransitRouteResource extends JsonResource
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
            'route_name' => $this->route_name,
            'short_name' => $this->short_name,
            'line_shape' => $this->line_shape,
            'vehicle_type' => $this->vehicle_type,
            'direction' => $this->direction,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'segments' => SegmentResource::collection($this->segments),
        ];
    }
}
