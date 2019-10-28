<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    protected $fillable = [
        'title',
        'comments',
        'start_date',
        'expiration_date',
        'active',
        'user_id'
    ];

    protected $casts = [
        'start_date' => 'date:Y-m-d',
        'expiration_date' => 'date:Y-m-d',
        'active' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function dateBrToDatabase($date)
    {
        if (!$date) {
            return $date;
        }

        $date = str_replace('/', '-', $date);
        return date("Y-m-d", strtotime($date));
    }
}
