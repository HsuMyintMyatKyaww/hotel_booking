<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name', 'city'
    ];

    public function rooms()
    {
        return $this->hasMany(Rooms::class, 'hotel_id');
    }
}
