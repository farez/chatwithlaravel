<?php

namespace App\QA;

class UserSession {

    /**
     * Returns the UUID stored in the current session. If there
     * isn't one, create it.
     */
    public static function getSessionUuid(): string
    {
        if (! session()->has('uuid')) {
            session(['uuid' => \Illuminate\Support\Str::uuid()]);
        }

        return session('uuid');
    }

}
