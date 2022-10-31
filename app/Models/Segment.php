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
        'start_station_id',
        'end_station_id',
    ];

    public function startingPoint()
    {
        return $this->hasOne(Station::class);
    }

    public function endingPoint()
    {
        return $this->hasOne(Station::class);
    }
}
