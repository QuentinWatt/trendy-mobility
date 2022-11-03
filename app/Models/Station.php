<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
    ];

    public function departures()
    {
        return $this->hasMany(Segment::class, 'depart_station_id');
    }
    
    public function arrivals()
    {
        return $this->hasMany(Segment::class, 'arrival_station_id');
    }
}
