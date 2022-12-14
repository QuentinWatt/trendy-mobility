<?php

namespace App\Models;

use App\Models\Station;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Segment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'distance',
        'estimated_travel_time',
        'depart_station_id',
        'arrive_station_id',
        'transit_route_id',
    ];

    public function TransitRoutes()
    {
        return $this->belongsTo(TransitRoute::class);
    }

    public function departureStation()
    {
        return $this->hasOne(Station::class, 'id', 'depart_station_id');
    }

    public function arrivalStation()
    {
        return $this->hasOne(Station::class, 'id', 'arrive_station_id');
    }
}
