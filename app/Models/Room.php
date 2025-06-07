<?php

namespace App\Models;

use Database\Factories\RoomFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Room extends Model
{

    use HasFactory;

    protected $table = 'room';
    protected $primaryKey= 'id';
    protected $fillable = ['room_number' , 'description' , 'offer' , 'price', 'discount' , 'cancellation_policy'];

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    protected static function newFactory(){
        return RoomFactory::new();
    }
}
