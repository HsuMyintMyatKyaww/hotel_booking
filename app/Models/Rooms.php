<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'room_type',
        'photo',
        'available',
        'price',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }
}