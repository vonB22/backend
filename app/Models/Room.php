<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number',
        'type',
        'price',
        'status',
        'description',
        'capacity',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
