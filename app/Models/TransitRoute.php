<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_name',
        'short_name',
        'line_shape',
        'vehicle_type',
        'direction',
    ];

    public function segments()
    {
        return $this->hasMany(Segment::class, 'transit_route_id');
    }
}
