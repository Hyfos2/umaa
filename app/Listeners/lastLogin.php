<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class lastLogin
{
    public function __construct()
    {

    }

    public function handle(Login $event)
    {
        $event->user->lastLogin   =Carbon::now('Africa/Harare');
        $event->user->save();
    }
}
