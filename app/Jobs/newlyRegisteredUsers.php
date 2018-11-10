<?php

namespace App\Jobs;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;;
use Illuminate\Contracts\Mail\Mailer;

class newlyRegisteredUsers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

     protected  $user;
    
    public function __construct(User $user)
    {
     $this->user = $user;
    }

    public function handle(Mailer $mailer,User $user)
    {

         $data = array(
                    'name'=>$user->name,
                    'surname'=>$user->surname,
                    'email' => $user->email,
                    'password' => $user->userName);

        $mailer->send('emails.newUser', $data, function ($message)  use($user){
 
                    $message->from('info@allsolutionsoftwares.co.zw', 'Information Desk');
                    $message->to($user->email)->subject("Registration Notification");
                });
        
    }
}
