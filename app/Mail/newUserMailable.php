<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class newUserMailable extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    public function __construct(User $user)
    {
            $this->user =$user;
    }

    public function build()
    {
        return $this->view('emails.newUser') ->with([
            'name'=>$this->user->name,
            'surname'=>$this->user->surname,
            'email'=>$this->user->email,
            'password'=>$this->user->userName
            // 'password'=>decrypt($this->user->password)
        ]);
    }
}
