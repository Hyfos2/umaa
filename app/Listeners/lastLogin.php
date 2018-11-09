<?php

namespace App\Listeners;

use App\UserDeviceInformation;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;

class lastLogin
{
    public $deviceInformation;
    public function __construct(UserDeviceInformation $deviceInformation)
    {
        $this->deviceInformation = $deviceInformation;
    }
    public function handle(Login $event)
    {
        $agent = new Agent();
        $this->deviceInformation->logIn    =Carbon::now('Africa/Harare');
        $this->deviceInformation->logOut   =null;
        $this->deviceInformation->deviceInformation    =$agent->platform().'('.$agent->browser().')'?:$agent->device().'('.$agent->browser().')';
        $this->deviceInformation->deviceIpAddress      =\Request::ip();
        $this->deviceInformation->userId   =$event->user->id;
        $this->deviceInformation->save();
       
    }
}
