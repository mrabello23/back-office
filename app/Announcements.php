<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    protected $fillable = ['title', 'comments', 'start_date', 'expiration_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
