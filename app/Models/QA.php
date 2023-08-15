<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QA extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'response_data' => 'array',
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}


