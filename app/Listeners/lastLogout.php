<?php

namespace App\Listeners;

use Illuminate\Auth\Events\logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
class lastLogout
{

    public function __construct()
    {

    }

    public function handle(logout $event)
    {
        $event->user->lastLogout   =Carbon::now('Africa/Harare');
        $event->user->save();
    }
}
