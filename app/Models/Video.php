<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        self::creating(function (Video $video) {
            $video->uuid = \Illuminate\Support\Str::uuid();
        });
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function captions()
    {
        return $this->hasMany(Caption::class);
    }

    public function qas()
    {
        return $this->hasMany(QA::class);
    }
}
