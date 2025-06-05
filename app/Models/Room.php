<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $primaryKey= 'id';
    protected $fillable = ['room_number' , 'description' , 'offer' , 'price', 'discount' , 'cancellation_policy'];

    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
