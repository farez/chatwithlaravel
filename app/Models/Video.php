<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function captions()
    {
        return $this->hasMany(Caption::class);
    }
}
