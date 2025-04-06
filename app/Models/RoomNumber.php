<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'room_number',
    ];

    /**
     * Get the room that owns the room number.
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
} 