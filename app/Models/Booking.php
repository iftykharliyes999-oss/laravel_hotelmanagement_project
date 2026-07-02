<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_name',
        'phone',
        'email',
        'room_id',
        'check_in',
        'check_out',
        'adults',
        'children',
        'total_price',
        'payment_status',
        'booking_status',
        'special_request'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}