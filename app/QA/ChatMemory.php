<?php

namespace App\QA;

use App\Models\QA;
use Illuminate\Support\Collection;

class ChatMemory
{
    /**
     * Gets the last few chat Q&As and formats it into a prompt.
     * @param $videoId
     */
    public static function forVideo($videoId): Collection
    {
        return QA::whereVideoId($videoId)->whereUuid(UserSession::getSessionUuid())->latest()->take(5)->get();
    }
}
