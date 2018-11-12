<?php

namespace App\Jobs;

use App\User;
use App\Mail\newUserMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendMailToNewUsers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected  $user;
    public $tries = 5;
    
    public function __construct(User $user)
    {
     $this->user = $user;
    }

    
    public function handle(User $user)
    {

       \Mail::to('hyfosbrian@gmail.com')->send(new newUseMailable ($user));

      //     $data = array(
      //               'name'=>$user->name,
      //               'surname'=>$user->surname,
      //               'email' => $user->email,
      //               'password' => $user->userName);

      // \Mail::send('emails.newUser', $data, function ($message) use ($user) {
      //               $message->from('info@allsolutionsoftwares.co.zw', 'Information Desk');
      //               $message->to($user->email)->subject("Registration Notification");
      //           });

    }
}
