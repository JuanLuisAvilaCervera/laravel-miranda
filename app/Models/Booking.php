<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

     protected $table = 'booking';
    protected $primaryKey= 'id';
    protected $fillable = ['order_date' , 'check_in_date' , 'check_out_date' , 'status' , 'special_request'];


    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
