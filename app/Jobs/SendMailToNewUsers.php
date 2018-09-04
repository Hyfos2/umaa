<?php

namespace App\Jobs;

use App\User;
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
    
    public function __construct(User $user)
    {
     $this->user = $user;
    }

    
    public function handle(User $user)
    {
          $data = array(
                    'name'=>$user->name,
                    'surname'=>$user->surname,
                    'email' => $user->email,
                    'password' => $user->userName
                     );

      //return $user->email;

//        return $this->view('emails.newUser') ->with([
//            'name'=>$this->user->name,
//            'surname'=>$this->user->surname,
//            'email'=>$this->user->email,
//            'password'=>decrypt($this->user->password)
//        ]);

            return  \Mail::send('emails.newUser', $data, function ($message) use ($user) {
                    $message->from('info@umma.co.edu', 'Information Desk');
                    $message->to($user->email)->subject("Registration Message");
                });
    }
}
