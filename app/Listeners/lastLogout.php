<?php

namespace App\Listeners;

use App\UserDeviceInformation;
use Illuminate\Auth\Events\logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
class lastLogout
{

    public $user;
    public function __construct($user)
    {
        $this->user =$user;
    }

    public function handle(logout $event)
    {

        $updateARecord             = UserDeviceInformation::where('userId',$this->user)->first();
        $updateARecord->update(['logOut'=>Carbon::now()->tz("Africa/Harare")]);
    }
}
