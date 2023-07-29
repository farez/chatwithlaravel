<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
