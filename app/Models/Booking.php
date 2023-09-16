<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id','room_id','name', 'phone_no', 'room_type', 'email', 'date', 'time', 'message'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotels::class);
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}