<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey= 'id';
    protected $fillable = ['comment_date' , 'subject' , 'comment' , 'archived'];

    public function user(): BelongsTo

    {
        return $this->belongsTo(User::class);
    }
}
