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

    public function segmentAsStart()
    {
        return $this->belongsToMany(Segment::class, 'start_station_id');
    }
    
    public function segmentAsEnd()
    {
        return $this->belongsToMany(Station::class, 'end_station_id');
    }
}
