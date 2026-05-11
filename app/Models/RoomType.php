<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = ['name', 'description', 'base_price'];

    public function hotelRooms()
    {
        return $this->hasMany(HotelRoom::class, 'room_type_id');
    }
}