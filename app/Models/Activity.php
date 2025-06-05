<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $primaryKey= 'id';
    protected $fillable = ['datetime' , 'paid' , 'notes' , 'satisfaction', 'type' , 'user_id'];
    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }
    
}
